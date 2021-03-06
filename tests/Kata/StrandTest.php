<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Strand;
use Kata\RnaNucleotide;

class StrandTest extends TestCase
{
    protected function setUp(): void
    {
        $this->strand = new Strand();
    }

    public function testStrand(): void
    {
        $expected = ['U'];
        $this->dnaNucleotide = new DnaNucleotide();
        $actual = $this->dnaNucleotide->convertStrandToDnaNucleotide('U');
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
