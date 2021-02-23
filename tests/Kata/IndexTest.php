<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

use Kata\Transcription;
use Kata\RnaNucleotide;

class TranscriptionTest extends TestCase
{
    protected function setUp(): void
    {
        $this->transcription = new Transcription();
    }

    public function testDnaGIsTransformedToRnaC() {
        $expected = new RnaNucleotide('C');

        $actual = $this->transcription->convertDnaNucleotideToRnaNucleotide('G');

        $this->assertEquals($expected, $actual);
    }

}
