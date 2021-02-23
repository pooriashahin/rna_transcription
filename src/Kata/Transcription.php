<?php

namespace Kata;


class Transcription
{

    public function convertDnaNucleotideToRnaNucleotide(DnaNucleotide $dnaNucleotide): RnaNucleotide
    {
        if ($dnaNucleotide->areYouEqualTo(new DnaNucleotide('G'))) { 
            return new RnaNucleotide('C');
        }
        
        return new RnaNucleotide('G');
            

    }
}
