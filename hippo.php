<?php

class Hippo{
    public $hippo = [];
    
    public function __construct(array $object)
    {
        $this->hippo['name'] = $object['name'];
        $this->hippo['strengh'] = $object['strengh'];
        $this->hippo['vitesse'] = $object['vitesse'];
        $this->hippo['stamina'] = 100;

    }
}