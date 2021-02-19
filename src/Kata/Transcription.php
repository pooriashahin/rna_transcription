<?php

namespace Kata;

class Transcription
{
    public function handle(Nucleotide $nucleotide): string
    {
        return $nucleotide->convertDnaToRna();
    }
}

$nucleotide = 'ATT';
for ($i = 0; $i <= strlen($nucleotide)-1; $i++)
{
    echo $nucleotide[$i];
}
