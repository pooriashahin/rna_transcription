<?php

namespace Kata;

class Convertor

{

    
    public function toRna(DnaStrand $dnaStrand): RnaStrand
    {
        if ($dnaStrand->isNucleotide(new DnaStrand('G'))) {
            return 'C';
        }

        if ($dnaStrand->isNucleotide(new DnaStrand('T'))) {
            return 'A';
        }

        return 'G';
    
    }
}
