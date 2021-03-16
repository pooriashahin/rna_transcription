<?php

namespace Kata;

class DnaNucleotide

{

    private string $nucleotide;

    public function __construct(string $dnaNucleotide) {
        $this->nucleotide = $dnaNucleotide;
    }

    public function convertDnaNucleotideToRnaNucleotide(DnaNucleotide $dnaNucleotide): array
    {
        $rnaNucleotide = [
            'C'=>'G',
            'G'=>'C',
            'T'=>'A',
            'A'=>'U',
        ];

        $nucleotideArray = [];

        foreach(str_split($this->nucleotide) as $i){
            array_push($nucleotideArray, $rnaNucleotide[$i]);
        }
        return $nucleotideArray;
    }
}