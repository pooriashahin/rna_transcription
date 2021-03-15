<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Convertor;
use Kata\DnaStrand;

class IndexTest extends TestCase
{
    protected function setUp(): void
    {
        $this->convertor = new Convertor();
    }

    public function testTranscribesGuanineToCytosine() : void
    {
        $this->assertSame('G', $this->convertor->toRna('C'));
    }

    /*public function testTranscribesCytosineToGuanine() : void
    {
        $this->assertSame('C', toRna('G'));
    }

    public function testTranscribesThymineToAdenine() : void
    {
        $this->assertSame('A', toRna('T'));
    }

    public function testTranscribesAdenineToUracil() : void
    {
        $this->assertSame('U', toRna('A'));
    }

    public function testTranscribesAllOccurencesOne() : void
    {
        $this->assertSame('UGCACCAGAAUU', toRna('ACGTGGTCTTAA'));
    }*/

 
}
