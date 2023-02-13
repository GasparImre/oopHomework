<?php

class Cocoa extends Pancake
{

    public function __construct(?string $size)
    {
        $this->size = $size;
        $this->filling = 'Cocoa';
        $this->details();
    }
}