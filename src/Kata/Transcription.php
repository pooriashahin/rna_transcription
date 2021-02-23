<?php

namespace Kata;


class Transcription
{

    public function convertDnaNucleotideToRnaNucleotide(DnaNucleotide $dnaNucleotide): RnaNucleotide
    {
        if ($dnaNucleotide->isEqual(new DnaNucleotide('G'))) { 
            return new RnaNucleotide('C');
        }
        
        return new RnaNucleotide('G');
            

    }
}
