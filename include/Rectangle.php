<?php

class Rectangle
{

    private $h;
    private $w;
    private $point;

    public function __construct($h, $w, Point $point)
    {
        $this->h = $h;
        $this->w = $w;
        $this->point = $point;
    }
    public function surface()
    {
        return $this->h * $this->w;
    }
    public function interieur1(Point $p)
    {
        // we check if the p.x is bigger than point.x but doesn't exceed the width , same for heighttan
        return ($p->afficherX() >= $this->point->afficherX()) && ($p->afficherY() <= $this->point->afficherX() + $this->h)
            && ($p->afficherX() >= $this->point->afficherY()) && ($p->afficherY() <= $this->point->afficherY() + $this->w);
    }

    public function interieur2(Rectangle $rectangle)
    {
        // we already have a function that checks for the point , we add height and width checkers
        return $this->interieur1($rectangle->point) && $rectangle->h <= $this->h && $rectangle->w <= $this->w;    
    }


    public function egalite(Rectangle $rec)
    {
        // point1 == point2 && height1 == height2 && width1 == width2
        return $this->point->distance($rec->point) == 0
            && $this->h == $rec->h
            && $this->w == $rec->w;
    }
    
}
