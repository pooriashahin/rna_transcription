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

}
