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
        $array =[];

        foreach(str_split($nucleotide) as $nucleotide)
        {
        switch ($nucleotide)
            {
                case $this->isNucleotideT($nucleotide):
                    array_push($array, 'A');
                    break;
        
                case $this->isNucleotideA($nucleotide):
                    array_push($array, 'U');
                    break;

                case $this->isNucleotideC($nucleotide):
                    array_push($array, 'G');
                    break;
        
                case $this->isNucleotideG($nucleotide):
                    array_push($array, 'C');
                    break;
            } 
         
        }
        return implode($array);  
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
echo $j->convertDnaToRna('TTACCCCCC');