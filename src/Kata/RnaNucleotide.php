<?php

namespace Kata;

class RnaNucleotide
{

    public $rna =[
        'T'=>'A',
        'A'=>'U',
        'C'=>'G',
        'G'=>'C',
    ];

    public $dna =[
        'T'=>'T',
        'A'=>'A',
        'C'=>'C',
        'G'=>'G',
    ];

    private string $value;

    

    public function convertDnaToRna(DnaNucleotide $dnaNucleotide)
    {
        foreach($dnaNucleotide as $i)
        {   
            return 'U';
        }
        
        /*
        foreach(str_split($this->value) as $this->value )
        {
            $this->replaceEachDnaNucleotideWithRnaNucleotide();
        }
        return implode($this->array);  */
    }

 
}