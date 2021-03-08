<?php

namespace Kata;

class DnaNucleotide
{
    private string $value;

    private array $array =[];

    public function convertDnaStrandToDnaNucleotide(DnaStrand $dnaStrand)
    {
        return str_split($dnaStrand);
    }


 
}