<?php

namespace Kata;

class DnaStrand
{   
    Const A = 'A';
    Const T = 'T';
    Const C = 'C';
    Const G = 'G';
    Const U = 'U';

    private string $value;

<<<<<<< HEAD
    public function __construct(string $strand)
    {
        $this->value = $strand;
    }

    public function handle()
    {
        return $this->value;
    }
    
=======
    public function __construct(string $dnaStrand)
    {
      $this->value = $dnaStrand;
       
    }

    public function strand()
    {
        return $this->value;
    }

    

   
 

>>>>>>> d5a4ce62d7e25fc1e326c31ea2fc59eb832113bc
}