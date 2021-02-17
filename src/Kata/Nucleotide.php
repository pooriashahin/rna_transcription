<?php

namespace Kata;

class Nucleotide
{
    public function convertDnaToRna($nucleotide): string 
    {
        if ($nucleotide === 'A')
        {
            return 'U';
        }

        if ($nucleotide === 'C')
        {
            return 'G';
        }

        if ($nucleotide === 'G')
        {
            return 'C';
        }

        if ($nucleotide === 'T')
        {
            return 'A';
        }

    }
    

}