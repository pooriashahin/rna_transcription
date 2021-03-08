<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\DnaStrand;
use Kata\RnaNucleotide;

class StrandTest extends TestCase
{
    protected function setUp(): void
    {
        $this->dnaNucleotide = new DnaNucleotide();
    }

    public function testDnaStrand(): void
    {
        $expected = ['U'];
        
        $actual = $this->dnaNucleotide->convertDnaStrandToDnaNucleotide('U');
        $this->assertSame($expected, $actual);
    }

    public function testRna(): void
    {
        $expected = ['U'];
        $this->rnaNucleotide = new RnaNucleotide();
        $actual = $this->rnaNucleotide->convertDnaToRna('A');
        $this->assertSame($expected, $actual);
    }

    
 
}
