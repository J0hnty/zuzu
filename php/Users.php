<?php
class Users {

    public $id;
    public $fname;
    public $lname;
    public $adres;
    public $zipcode;
    public $city;

    public function __construct() {

        settype($this->id, 'integer');
    }
}
