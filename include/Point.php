<?php

class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherX()
    {
        return $this->x;
    }

    public function afficherY()
    {
        return $this->y;
    }

    public function distance(Point $p)
    { 
        $x = pow($this->x - $p->x,2);

        $y = pow($this->y - $p->y,2);

        return sqrt($x+$y);
    }
}


