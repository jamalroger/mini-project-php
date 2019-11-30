<?php

class Triangle
{

    private $point1; // A
    private $point2; // B 
    private $point3; // C

    public function __construct(Point $point1, Point $point2, Point $point3)
    {
        $this->point1 = $point1;
        $this->point2 = $point2;
        $this->point3 = $point3;
    }
    public function isocele()
    {
        //ABC AB=AC || BA=BC || CA=CB
        $dist1 = $this->point1->distance($this->point2) == $this->point1->distance($this->point3);
        $dist2 = $this->point2->distance($this->point1) == $this->point2->distance($this->point3);
        $dist3 = $this->point3->distance($this->point1) == $this->point3->distance($this->point2);

        return ($dist1 || $dist2 || $dist3);
    }
    public function equilateral()
    {
        //ABC AB=AC && BA=BC && CA=CB
        $dist1 = $this->point1->distance($this->point2) == $this->point1->distance($this->point3);
        $dist2 = $this->point2->distance($this->point1) == $this->point2->distance($this->point3);
        $dist3 = $this->point3->distance($this->point1) == $this->point3->distance($this->point2);

        return ($dist1 && $dist2 && $dist3);
    }
    public function rectangle()
    {
        // Si BC² =AB² +AC² , alors ABC est rectangle en A
        $ab = pow($this->point1->distance($this->point2), 2);

        $ac = pow($this->point1->distance($this->point3), 2);

        $bc = pow($this->point2->distance($this->point3), 2);

        return (($bc == $ab + $ac) || ($ac == $ab + $bc) || ($ab == $ac + $bc));
    }
}
