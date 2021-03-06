<?php

namespace Kata;

class Strand
{   
    Const A = 'A';
    Const T = 'T';
    Const C = 'C';
    Const G = 'G';
    Const U = 'U';

    private string $value;

    public function handle(string $strand)
    {
        return $strand;
    }
    
    public function convertDnaToRna()
    {
        foreach(str_split($this->value) as $this->value )
        {
            $this->replaceEachDnaNucleotideWithRnaNucleotide();
        }
        return implode($this->array);  
    }

 

}