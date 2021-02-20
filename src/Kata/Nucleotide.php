<?php

namespace Kata;

class Nucleotide
{   
    public function convert1stToRna($nucleotide)
    {
        for ($i=0; $i <= strlen($nucleotide)-1; $i++)
        {
            switch ($nucleotide[$i]) {
                case 'T':
                    return 'A';
                    break;
                
                case 'A':
                    return 'U';
                    break;
    
                case 'C':
                    return 'G';
                    break;
                
                case 'G':
                    return 'C';
                    break;
            }
        }
    }

    public function convert2ndToRna($nucleotide)
    {
        for ($i=1; $i <= strlen($nucleotide)-1; $i++)
        {
            switch ($nucleotide[$i]) {
                case 'T':
                    return 'A';
                    break;
                
                case 'A':
                    return 'U';
                    break;
    
                case 'C':
                    return 'G';
                    break;
                
                case 'G':
                    return 'C';
                    break;
            }
        }
    }

    

   public function convertDnaToRna($nucleotide): string 
      
        {
            return $this->convert1stToRna($nucleotide) . $this->convert2ndToRna($nucleotide);
            

           /* for ($i=0; $i <= strlen($nucleotide)-1; $i++)
            {
                return $nucleotide[$i];
            }
        

        if ($this->isNucleotideA($nucleotide[0]))
        {
            return 'U';
        }

        if ($this->isNucleotideC($nucleotide[0]))
        {
            return 'G';
        }

        if ($this->isNucleotideG($nucleotide[0]))
        {
            return 'C';
        }

        if ($this->isNucleotideT($nucleotide[0]))
        {
            return 'A';
        }*/

       
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

    public function printIt($nucleotide)
    {
        return $this->convertDnaToRna($nucleotide);
    }


}

