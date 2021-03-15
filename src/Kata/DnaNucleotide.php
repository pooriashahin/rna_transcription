<?php

namespace Kata;

class DnaNucleotide
{
   
    public function __construct(DnaStrand $dnaStrand) {
        $this->strand = $dnaStrand;
    }

    

    public function convertDnaStrandToDnaNucleotide(DnaStrand $dnaStrand): DnaNucleotide
    {
        return str_split($this->dnaStrand);
    }

}