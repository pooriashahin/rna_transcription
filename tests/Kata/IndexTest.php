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

 
}
