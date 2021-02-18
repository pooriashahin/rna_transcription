<?php

namespace Kata;

class Index
{
    public function handle(string $nucleotide): string
    {
        if ($nucleotide === 'T')
        {
            return 'A';
        }
        if ($nucleotide === 'G')
        {
            return 'C';
        }
        if ($nucleotide === 'C')
        {
            return 'G';
        }
        return 'U';
    }

}

$rna = new Index();
echo $rna->handle('T');
