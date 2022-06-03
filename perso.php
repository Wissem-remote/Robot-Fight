<?php

class Perso{
    public $perso = [];
    
    public function __construct(array $object)
    {
        $this->perso['name'] = $object['name'];
        $this->perso['strengh'] = $object['strengh'];
        $this->perso['vitesse'] = $object['vitesse'];
        $this->perso['stamina'] = 100;

    }
}