<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Convertor;

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

    public function testTranscribesCytosineToGuanine() : void
    {
        $this->assertSame('C', $this->convertor->toRna('G'));
    }

    /*public function testTranscribesThymineToAdenine() : void
    {
        $this->assertSame('A', $this->convertor->toRna('T'));
    }

    public function testTranscribesAdenineToUracil() : void
    {
        $this->assertSame('U', $this->convertor->toRna('A'));
    }

    public function testTranscribesAllOccurencesOne() : void
    {
        $this->assertSame('UGCACCAGAAUU', $this->convertor->toRna('ACGTGGTCTTAA'));
    }*/

 
}
