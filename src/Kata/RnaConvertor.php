<?php

namespace Kata;

class RnaConvertor

{
    public function convertDnaStrandToRnaStrand(DnaStrand $dnaStrand): RnaStrand
    {
        $rnaNucleotideList = [];

        while ($dnaNucleotide = $dnaStrand->next()) {
            switch ($dnaNucleotide->value()) {
                case 'C':
                    $rnaNucleotide = new RnaNucleotide('G');
                    array_push($rnaNucleotideList, $rnaNucleotide->value());
                    break;
                case 'A':
                    $rnaNucleotide = new RnaNucleotide('U');
                    array_push($rnaNucleotideList, $rnaNucleotide->value());
                    break;
                case 'T':
                    $rnaNucleotide = new RnaNucleotide('A');
                    array_push($rnaNucleotideList, $rnaNucleotide->value());
                    break;
                case 'G':
                    $rnaNucleotide = new RnaNucleotide('C');
                    array_push($rnaNucleotideList, $rnaNucleotide->value());
                    break;

            } 
        }
        return new RnaStrand(implode($rnaNucleotideList));
    }
}
