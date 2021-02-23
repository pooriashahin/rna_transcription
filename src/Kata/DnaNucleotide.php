<?php

namespace Kata;

class DnaNucleotide {

    private string $value;

    public function __construct(string $dnaNucleotide) {
        $this->value = $dnaNucleotide;
    }

    public function areYouEqualTo(DnaNucleotide $dnaNucleotide): bool
    {
        return $this->value === $dnaNucleotide->value;
    }

}
