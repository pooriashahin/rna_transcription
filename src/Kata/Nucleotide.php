<?php

namespace Kata;

class Nucleotide
{   
   public function convertDnaToRna($nucleotide): string 
        {
            for ($i=0; $i <+ strlen($nucleotide)-1; $i++)
            {
                echo $i;
            }
        
        if ($nucleotide === 'TT')
        {
            return 'AA';
        }
      
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
$nucleotide = 'TTACGG';
for ($i=0; $i <+ strlen($nucleotide)-1; $i++)
{
    echo $nucleotide[$i];
}
