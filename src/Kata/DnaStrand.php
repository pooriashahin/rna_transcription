<?php

namespace Kata;

class DnaStrand

{
    private string $strand;

    public function __construct(string $dnaStrand)
    {
        $this->strand = $dnaStrand;
    }

    public function isNucleotide(DnaStrand $anotherDnaStrand): bool
    {
        return $this->strand === $anotherDnaStrand->strand;
    }

  


}