<?php

namespace Kata;

class Convertor

{
    public function toRna(string $strand): string
    {
        if ($strand === 'G') {
            return 'C';
        }
        return 'G';
    }
}
