<?php

namespace Kata;

class DnaStrand

{
    private string $strand;

    public function __construct(string $dnaStrand)
    {
        $this->strand = $dnaStrand;
    }

    public function a(DnaStrand $dnaStrand)
    {
        return $this->strand;
    }

}