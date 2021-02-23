<?php

namespace Kata;


class Transcription
{

    public function convertDnaNucleotideToRnaNucleotide(string $dnaNucleotide): RnaNucleotide
    {
        if ($dnaNucleotide === 'G') { 
            return new RnaNucleotide('C');
        }
        
        return new RnaNucleotide('G');
            

    }
}
