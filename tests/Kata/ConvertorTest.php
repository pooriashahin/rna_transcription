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
        $expected = new RnaStrand('C');
        $this->assertEquals($expected, $actual);
    }

    public function testTranscribesCytosineToGuanine() : void
    {
        $actual = $this->convertor->convertDnaStrandToRnaStrand(new DnaNucleotide('C'));
        $expected = new RnaStrand('G');
        $this->assertEquals($expected, $actual);
    }

    public function testTranscribesThymineToAdenine() : void
    {
        $actual = $this->convertor->convertDnaStrandToRnaStrand(new DnaNucleotide('T'));
        $expected = new RnaStrand('A');
        $this->assertEquals($expected, $actual);
    }

    public function testTranscribesAdenineToUracil() : void
    {
        $actual = $this->convertor->convertDnaStrandToRnaStrand(new DnaNucleotide('A'));
        $expected = new RnaStrand('U');
        $this->assertEquals($expected, $actual);
    }

    public function testTranscribesAllOccurencesOne() : void
    {
        $actual = $this->convertor->convertDnaStrandToRnaStrand(new DnaNucleotide('ACGTGGTCTTAA'));
        $expected = new RnaStrand('UGCACCAGAAUU');
        $this->assertEquals($expected, $actual);
    }

 
}
