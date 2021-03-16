<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\RnaConvertor;
use Kata\DnaStrand;
use Kata\DnaNucleotide;

class IndexTest extends TestCase
{
    protected function setUp(): void
    {
        $this->convertor = new RnaConvertor();
    }

    public function testTranscribesGuanineToCytosine() : void
    {
        
        $actual = $this->convertor->convertDnaStrandToRnaStrand(new DnaNucleotide('G'));
        $expected = 'C';
        $this->assertSame($expected, $actual);
    }

    public function testTranscribesCytosineToGuanine() : void
    {
        $actual = $this->convertor->convertDnaStrandToRnaStrand(new DnaNucleotide('C'));
        $expected = 'G';
        $this->assertSame($expected, $actual);
    }

    public function testTranscribesThymineToAdenine() : void
    {
        $actual = $this->convertor->convertDnaStrandToRnaStrand(new DnaNucleotide('T'));
        $expected = 'A';
        $this->assertSame($expected, $actual);
    }

    public function testTranscribesAdenineToUracil() : void
    {
        $actual = $this->convertor->convertDnaStrandToRnaStrand(new DnaNucleotide('A'));
        $expected = 'U';
        $this->assertSame($expected, $actual);
    }

    public function testTranscribesAllOccurencesOne() : void
    {
        $actual = $this->convertor->convertDnaStrandToRnaStrand(new DnaNucleotide('ACGTGGTCTTAA'));
        $expected = 'UGCACCAGAAUU';
        $this->assertSame($expected, $actual);
    }

 
}
