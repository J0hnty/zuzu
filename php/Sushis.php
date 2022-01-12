<?php

class sushis {

    public $id;
    public $name;
    public $price;
    public $picture;
    public $amount;

    public function __construct() {

        settype($this->id, 'integer');
    }

}