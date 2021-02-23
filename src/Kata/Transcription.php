<?php

namespace Kata;


class Transcription
{
    public function handle(DnaConverter $dnaStrand): string
    {
        return $dnaStrand->convertDnaToRna();
    }
}
