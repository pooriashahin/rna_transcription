<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\DnaStrand;
use Kata\RnaNucleotide;

class DnaStrandTest extends TestCase
{
    protected function setUp(): void
    {
        $this->dnaStrand = new DnaStrand('U');
    }

    public function testDnaStrand(): void
    {
        $expected = 'U';
        $this->dnaNucleotide = new DnaNucleotide();
        $actual = $this->dnaNucleotide->convertDnaStrandToDnaNucleotide('U');
        $this->assertSame($expected, $actual);
    }



    
 
}
