<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\Index;

class IndexTest extends TestCase
{
    protected function setUp(): void
    {
        $this->index = new Index();
    }

    public function testABecomesU(): void 
    {
        $actual = $this->index->handle('A');
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
