<?php

namespace Kata;

class DnaStrand
{   
    Const A = 'A';
    Const T = 'T';
    Const C = 'C';
    Const G = 'G';
    Const U = 'U';

    private string $value;


    public function __construct(string $dnaStrand)
    {
      $this->value = $dnaStrand;
       
    }

    public function strand()
    {
        return $this->value;
    }
}