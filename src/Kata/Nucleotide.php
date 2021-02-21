<?php

namespace Kata;

class Nucleotide
{   

    public function convertDnaToRna($nucleotide)
    {
        return $this->foreachFunction($nucleotide);
    }

    public function foreachFunction($nucleotide)
    {
        foreach(str_split($nucleotide) as $i)
        {
        switch ($i)
            {
                case $this->isNucleotideT($i):
                    echo 'A';
                    break;
        
                case $this->isNucleotideA($i):
                    echo 'U';
                    break;

                case $this->isNucleotideC($i):
                    echo 'G';
                    break;
        
                case $this->isNucleotideG($i):
                    echo 'C';
                    break;
            }    
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

$j = new Nucleotide();
$j->convertDnaToRna('TT');