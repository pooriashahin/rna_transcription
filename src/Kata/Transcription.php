<?php

namespace Kata;

class Transcription
{
    public function handle(Nucleotide $nucleotide): string
    {
        if ($nucleotide === 'T')
        {
            return 'A';
        }
        if ($nucleotide === 'G')
        {
            return 'C';
        }
        if ($nucleotide === 'C')
        {
            return 'G';
        }
        return 'U';
    }
}
