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
    }
   

}