<?php

class Jam extends Pancake
{


    public function __construct(?string $size)
    {
        $this->size=$size;
        $this->filling = 'Jam';
        $this->details();
    }
}