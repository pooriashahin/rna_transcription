<?php

namespace Kata;

class RnaConvertor

{
    public function convertDnaStrandToRnaStrand(DnaNucleotide $dnaNucleotide): RnaStrand
    {
        return new RnaStrand(implode($dnaNucleotide->convertDnaNucleotideToRnaNucleotide($dnaNucleotide)));    
    }
}
