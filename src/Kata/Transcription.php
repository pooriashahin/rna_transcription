<?php

namespace Kata;

class Transcription
{
    public function handle(Nucleotide $nucleotide): string
    {
        return $nucleotide->convertDnaToRna();
    }

   

    public function printIt($nucleotide)
    {
        for ($i=0; $i <= strlen($nucleotide)-1; $i++)
        {
            switch ($nucleotide[$i]) {
                case 'T':
                    echo 'A';
                    break;
                
                case 'A':
                    echo 'U';
                    break;
    
                case 'C':
                    echo 'G';
                    break;
                
                case 'G':
                    echo 'C';
                    break;
            }
        }
    }


    
}

$nucleotide = 'TAACGT';
$j = new Transcription();
$j->printIt($nucleotide);