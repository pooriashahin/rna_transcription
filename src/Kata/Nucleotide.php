<?php

class Nucleotide
{
    public string $letter;
    
    public function __construct(string $nucleotide)
    {
        $this->letter = $nucleotide;
    }

}