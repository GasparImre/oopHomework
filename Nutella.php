<?php

class Nutella extends Pancake
{

    public function __construct(?string $size)
    {
        $this->size = $size;
        $this->filling = 'Nutella';
        $this->details();
    }
}