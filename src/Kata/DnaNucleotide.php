<?php

namespace Kata;

class DnaNucleotide

{

    private string $nucleotide;

    public function __construct(string $dnaNucleotide) {
        $this->nucleotide = $dnaNucleotide;
    }

   
    public function value(): string
     {
        return $this->nucleotide;
    }
}