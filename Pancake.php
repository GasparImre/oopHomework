<?php

class Pancake
{
    protected const DOUGH = "basic";
    protected $filling;
    protected $size;


    /**
     * @param $filling
     */
    public function __construct($filling)
    {
        $this->size = "medium";
        $this->filling = $filling;
        $this->details();
    }

    public function getFilling(): string
    {
        return $this->filling;
    }
    public function getSize(): string
    {
        return $this->size;
    }

    public function details():void
{
    echo "Tészta: ". self::DOUGH.", töltelék: ".$this->getFilling()." , méret: ". $this->getSize().'<br>';
}

}