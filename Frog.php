<?php

class Frog extends Animal{
    private $legs = 4;

    public function jump(){
        echo "hop hop<br>";
    }    

    public function get_legs(){
        return $this->legs . "<br>";
    }
} 

?>