<?php

namespace Kata;

class DnaNucleotide
{
    private string $value;

    private array $array =[];

    public function convertStrandToDnaNucleotide(string $strand)
    {
        return str_split($strand);
    }


 
}