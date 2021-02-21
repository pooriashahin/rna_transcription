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
        $nucleotide = new Nucleotide();
        $actual = $nucleotide->convertDnaToRna('A');
        $expected = 'U';
        $this->assertSame($expected, $actual);
    }

    public function testCBecomesG(): void 
    {
        $nucleotide = new Nucleotide();
        $actual = $nucleotide->convertDnaToRna('C');
        $expected = 'G';
        $this->assertSame($expected, $actual);
    }

    public function testGBecomesC(): void 
    {
        $nucleotide = new Nucleotide();
        $actual = $nucleotide->convertDnaToRna('G');
        $expected = 'C';
        $this->assertSame($expected, $actual);
    }

    public function testTBecomesA(): void 
    {
        $nucleotide = new Nucleotide();
        $actual = $nucleotide->convertDnaToRna('T');
        $expected = 'A';
        $this->assertSame($expected, $actual);
    }

    public function testTTBecomesAA(): void 
    {
        $j = new Nucleotide();
        $actual = $j->convertDnaToRna('TT');
        $expected = 'AA';
        $this->assertSame($expected, $actual);
    }
    
   
    




 
}
