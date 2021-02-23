<?php

namespace Kata;


class Transcription
{

    public function convertDnaNucleotideToRnaNucleotide(DnaNucleotide $dnaNucleotide): RnaNucleotide
    {
        if ($dnaNucleotide->value === 'G') { 
            return new RnaNucleotide('C');
        }
        
        return new RnaNucleotide('G');
            

    }
}
