<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\DnaStrand;
use Kata\RnaNucleotide;
use Kata\DnaNucleotide;

class DnaStrandTest extends TestCase
{
    protected function setUp(): void
    {
        $this->strand = new DnaStrand('A');
    }

    public function testStrandU(): void
    {
        $expected = ['U'];
        $this->dnaNucleotide = new DnaNucleotide();
        $actual = $this->dnaNucleotide->convertStrandToDnaNucleotide(new DnaStrand('U'));
        $this->assertSame($expected, $actual);
    }

    public function testStrandUU(): void
    {
        $expected = ['A', 'U'];
        $this->dnaNucleotide = new DnaNucleotide();
        $actual = $this->dnaNucleotide->convertStrandToDnaNucleotide(new DnaStrand('AU'));
        $this->assertSame($expected, $actual);
    }

    public function testDnaNucleotideAToRnaNucleotideU(): void
    {
        $expected = ['U'];
        $this->rnaNucleotide = new RnaNucleotide();
        $actual = $this->rnaNucleotide->convertDnaToRna(new DnaNucleotide(['A']));
        $this->assertSame($expected, $actual);
    }
    
 
}
