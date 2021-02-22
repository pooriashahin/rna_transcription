<?php

namespace Kata;


class Transcription
{
    public function handle(Nucleotide $nucleotide): string
    {
        return $nucleotide->convertDnaToRna();
    }


    
}
