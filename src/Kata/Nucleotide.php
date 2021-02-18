<?php

namespace Kata;

class Nucleotide
{
    public function convertDnaToRna($nucleotide): string 
    {
        if ($this->isNucleotideA($nucleotide))
        {
            return 'U';
        }

        if ($this->isNucleotideC($nucleotide))
        {
            return 'G';
        }

        if ($this->isNucleotideG($nucleotide))
        {
            return 'C';
        }

        if ($this->isNucleotideT($nucleotide))
        {
            return 'A';
        }
    }


    
    private function isNucleotideA($nucleotide): bool
    {
        return $nucleotide === 'A';
    }

    private function isNucleotideC($nucleotide): bool
    {
        return $nucleotide === 'C';
    }

    private function isNucleotideG($nucleotide): bool
    {
        return $nucleotide === 'G';
    }

    private function isNucleotideT($nucleotide): bool
    {
        return $nucleotide === 'T';
    }


}
