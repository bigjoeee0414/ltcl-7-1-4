<?php

class Animal {
    public $cry = "bowbow!";
    
    function bow() {
        echo $this->cry.PHP_EOL;
    }
}

class Dog extends Animal {
    public $cry = "わんわん!";
}

$animal_1 = new Dog();
$animal_1->bow();

class Cat extends Animal {
    public $cry = "にゃんにゃん!";
}

$animal_2 = new Cat();
$animal_2->bow();