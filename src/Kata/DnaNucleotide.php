<?php

namespace Kata;

class DnaNucleotide
{
   

    private string $value;

    private array $array =[];

<<<<<<< HEAD
    public function convertStrandToDnaNucleotide(DnaStrand $strand)
    {
        return str_split($strand->handle());
    }

 

 
=======
    public function convertDnaStrandToDnaNucleotide(DnaStrand $dnaStrand): DnaStrand
    {
        return $dnaStrand->strand();
    }

    
    
>>>>>>> d5a4ce62d7e25fc1e326c31ea2fc59eb832113bc
}