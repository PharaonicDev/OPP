<?php

class Person {

    protected $name;
    protected $age;
    protected $Email;

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }
    public function setEmail($Email){
    	$this->email= $Email;
    }

    public function __toString() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.". " " . "you can connected wit me at " .
        $this->email;
    }
}

$person = new Person;
echo $person->setName("abubakr")->setAge(21)->setEmail("abubakr8911@gmail.com"); // echo on object automatically calls magic method __toString()
