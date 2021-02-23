<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

use Kata\Transcription;
use Kata\RnaNucleotide;
use Kata\DnaNucleotide;

class TranscriptionTest extends TestCase
{
    protected function setUp(): void
    {
        $this->transcription = new Transcription();
    }

    public function testDnaNucleotideGIsTransformedToRnaNucleotideC() {
        $expected = new RnaNucleotide('C');

        $actual = $this->transcription->convertDnaNucleotideToRnaNucleotide(new DnaNucleotide('G'));

        $this->assertEquals($expected, $actual);
    }

    public function testDnaNucleotideCIsTransformedToRnaNucleotideG() {
        $expected = new RnaNucleotide('G');

        $actual = $this->transcription->convertDnaNucleotideToRnaNucleotide(new DnaNucleotide('C'));

        $this->assertEquals($expected, $actual);
    }

}
