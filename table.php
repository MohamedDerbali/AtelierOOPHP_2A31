<?php
class Table
{ 
    private $color;
    private $weight;
    private $nbre_pieds;
    private $fabricationType;

    public function __construct($color = Null, $weight = Null, $nbre_pieds = Null, $fabricationType = Null)
    {
        $this->color = $color;
        $this->weight = $weight;
        $this->nbre_pieds = $nbre_pieds;
        $this->fabricationType = $fabricationType;
    }
   
    public function getColor()
    {
        return $this->color;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function getNbrePieds()
    {
        return $this->nbre_pieds;
    }
    public function getFabricationType()
    {
        return $this->fabricationType;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    public function setNbrePieds($nbre_pieds)
    {
        $this->nbre_pieds = $nbre_pieds;
    }
    public function setFabricationType($fabricationType)
    {
        $this->fabricationType = $fabricationType;
    }
}
