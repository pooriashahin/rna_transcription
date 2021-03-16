<?php

namespace Kata;

class RnaConvertor

{
    public function convertDnaStrandToRnaStrand(DnaNucleotide $dnaNucleotide): string
    {
        return implode($dnaNucleotide->convertDnaNucleotideToRnaNucleotide($dnaNucleotide));    
    }
}
