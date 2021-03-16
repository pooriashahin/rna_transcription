<?php

namespace Kata;

class RnaStrand

{
    private string $strand;

    public function __construct(string $rnaStrand)
    {
        $this->strand = $rnaStrand;
    }

    public function isRnaNucleotide(RnaStrand $anotherRnaStrand): bool
    {
        return $this->strand === $anotherRnaStrand->strand;
    }

  


}