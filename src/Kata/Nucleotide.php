<?php

namespace Kata;

class Nucleotide
{   
    Const A = 'A';
    Const T = 'T';
    Const C = 'C';
    Const G = 'G';
    Const U = 'U';

    private string $value;

    private array $array =[];

    public function __construct(string $nucleotide)
    {
        $this->value = $nucleotide;
    } 
    
    public function convertDnaToRna()
    {
        foreach(str_split($this->value) as $this->value )
        {
            $this->replaceEachDnaNucleotideWithRnaNucleotide();
        }
        return implode($this->array);  
    }


    private function replaceEachDnaNucleotideWithRnaNucleotide()
    {
        switch ($this->value)
        {
            case $this->isNucleotideT():
                array_push($this->array, self::A);
                break;
        
            case $this->isNucleotideA():
                array_push($this->array, self::U);
                break;

            case $this->isNucleotideC():
                array_push($this->array, self::G);
                break;
        
            case $this->isNucleotideG():
                array_push($this->array, self::C);
                break;
        } 
    }


    private function isNucleotideA(): bool
    {
        return $this->value === self::A;
    }

    private function isNucleotideC(): bool
    {
        return $this->value === self::C;
    }

    private function isNucleotideG(): bool
    {
        return $this->value === self::G;
    }

    private function isNucleotideT(): bool
    {
        return $this->value === self::T;
    }

}