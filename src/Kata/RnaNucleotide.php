<?php

namespace Kata;

class RnaNucleotide
{
    private string $value;

    private array $array =[];

    public function convertDnaToRna(DnaNucleotide $dnaNucleotide)
    {
        foreach($dnaNucleotide as $i)
        {
            if ($i === 'A')
            {
                return 'U';
            }
            

        }
        /*
        foreach(str_split($this->value) as $this->value )
        {
            $this->replaceEachDnaNucleotideWithRnaNucleotide();
        }
        return implode($this->array);  */
    }


  

    public function covertNucleotides(string $dnaNucleotide)
    {

        if ($dnaNucleotide === 'A')
        {
            array_replace('A');
        }

        if ($dnaNucleotide === 'T')
        {
            return ['A'];
        }

        if ($dnaNucleotide === 'C')
        {
            return ['G'];
        }

        if ($dnaNucleotide === 'G')
        {
            return ['C'];
        }
    }

    

 
}

echo "hi";