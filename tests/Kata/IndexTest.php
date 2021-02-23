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

    public function testDnaGIsTransformedToRnaC() {
        $expected = 'C';

        $actual = $this->transcription->handle('G');

        $this->assertEquals($expected, $actual);
    }

}
