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

    public function testDnaNucleotideGIsTransformedToRnaNucleotideC() {
        $expected = new RnaNucleotide('C');

        $actual = $this->transcription->convertDnaNucleotideToRnaNucleotide('G');

        $this->assertEquals($expected, $actual);
    }

    public function testDnaNucleotideCIsTransformedToRnaNucleotideG() {
        $expected = new RnaNucleotide('G');

        $actual = $this->transcription->convertDnaNucleotideToRnaNucleotide('C');

        $this->assertEquals($expected, $actual);
    }

}
