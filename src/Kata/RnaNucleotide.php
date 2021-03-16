<?php

namespace Kata;

class RnaNucleotide

{

    private string $nucleotide;

    public function __construct(string $rnaNucleotide) {
        $this->nucleotide = $rnaNucleotide;
    }

    
    public function value(): string
     {
        return $this->nucleotide;
    }
}