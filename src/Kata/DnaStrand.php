<?php

namespace Kata;

class DnaStrand

{
    private int $currentIndex = -1;
    private array $strand;

    public function __construct(string $dnaStrand)
    {
        $this->strand = str_split($dnaStrand);
    }

    public function next(): ?DnaNucleotide
    {
        $this->currentIndex++;
        return $this->current();
    }

    public function current(): ?DnaNucleotide
    {
        if ($this->currentIndex >= count($this->strand)){
            return null;
        }
        return new DnaNucleotide($this->strand[$this->currentIndex]);
    }


}
