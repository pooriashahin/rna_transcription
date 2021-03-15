<?php

namespace Kata;

class DnaNucleotide
{
   

    private string $value;

    private array $array =[];

    public function convertStrandToDnaNucleotide(DnaStrand $strand)
    {
        return str_split($strand->handle());
    }

 

 
}