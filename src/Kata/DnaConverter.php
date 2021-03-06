<?php

namespace Kata;

class DnaConverter
{   
    Const A = 'A';
    Const T = 'T';
    Const C = 'C';
    Const G = 'G';
    Const U = 'U';

    private string $value;

    private array $array =[];

    public function __construct(string $dnaStrand)
    {
        $this->value = $dnaStrand;
    } 
    
    public function convertDnaToRna()
    {
        foreach(str_split($this->value) as $this->value )
        {
            $this->replaceEachDnaNucleotideWithRnaNucleotide();
        }
        return implode($this->array);  
    }

    public function replaceEachDnaNucleotideWithRnaNucleotide()
    {
        switch ($this->value)
        {
            case $this->isNucleotide(self::T):
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


    private function isNucleotide(string $dnaStrand): bool
    {
        return $this->value === $dnaStrand;
    }

   

}