<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

use Kata\Transcription;


class TranscriptionTest extends TestCase
{
    protected function setUp(): void
    {
        $this->transcription = new Transcription();
    }

    public function testABecomesU(): void 
    {
        $actual = $this->transcription->handle(new DnaConverter('A'));
        $expected = 'U';
        $this->assertSame($expected, $actual);
    }

    public function testCBecomesG(): void 
    {
        $actual = $this->transcription->handle(new DnaConverter('C'));
        $expected = 'G';
        $this->assertSame($expected, $actual);
    }

    public function testGBecomesC(): void 
    {
        $actual = $this->transcription->handle(new DnaConverter('G'));
        $expected = 'C';
        $this->assertSame($expected, $actual);
    }

    public function testTBecomesA(): void 
    {
        $actual = $this->transcription->handle(new DnaConverter('T'));
        $expected = 'A';
        $this->assertSame($expected, $actual);
    }

    public function testTTBecomesAA(): void 
    {
        $actual = $this->transcription->handle(new DnaConverter('TT'));
        $expected = 'AA';
        $this->assertSame($expected, $actual);
    }
    
    public function testLongDnaChainBecomesLongRnaChain(): void 
    {
        $actual = $this->transcription->handle(new DnaConverter('TCGATCGATTT'));
        $expected = 'AGCUAGCUAAA';
        $this->assertSame($expected, $actual);
    }

    public function testTTBecomesAAAgain(): void 
    {
        $actual = $this->transcription->handle(new DnaConverter('TT'));
        $expected = 'AA';
        $this->assertSame($expected, $actual);
    }
   
}
