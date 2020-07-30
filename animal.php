<?php

class Animal {
    private $name;
    private $legs = 2;
    private $cold_blooded = false;

    function __construct($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name . "<br>";
    }

    public function get_legs(){
        return $this->legs . "<br>";
    }

    public function get_cold_blooded(){
        echo "false <br>";
        return $this->cold_blooded;
    }
}

?>