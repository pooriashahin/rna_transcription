<?php

namespace Kata;

class Convertor

{
  
    
    public function convertDnaNucleotideToRnaNucleotide(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->isDnaNucleotide(new DnaStrand('G'))) {
            return 'C';
        }

        if ($dnaStrand->isDnaNucleotide(new DnaStrand('T'))) {
            return 'A';
        }

        return 'G';
    
    }
}
