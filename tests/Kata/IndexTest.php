<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Transcription;
//use Kata\Nucleotide;
include "Kata/Nucleotide.php";
class IndexTest extends TestCase
{
    protected function setUp(): void
    {
        $this->index = new Transcription();
    }

    public function testABecomesU(): void 
    {
        $nucleotide = new Nucleotide();
        $actual = $this->nucleotide->handle('A');
        $expected = 'U';
        $this->assertSame($expected, $actual);
    }

    public function testCBecomesG(): void 
    {
        $actual = $this->index->handle('C');
        $expected = 'G';
        $this->assertSame($expected, $actual);
    }

    public function testGBecomesC(): void 
    {
        $actual = $this->index->handle('G');
        $expected = 'C';
        $this->assertSame($expected, $actual);
    }

    public function testTBecomesA(): void 
    {
        $actual = $this->index->handle('T');
        $expected = 'A';
        $this->assertSame($expected, $actual);
    }


 
}
