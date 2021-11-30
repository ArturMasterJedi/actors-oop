<?php

require_once 'IActions.php';
abstract class People
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        if (!empty($name)){
            $this->name=$name;
        }else{
            $this->name='People Non Defined';
            return 'Не введено имя человека. В классе People<br>';
        }
        if (!empty($age)){
            $this->age=$age;
        }else{
            $this->name=0;
            return 'Не введен возраст человека. В классе People<br>';
        }
    }

    public function setName($name){
        if (!empty($name)){
            $this->name=$name;
        }else{
            $this->name='People Non Defined';
            return 'Не введено имя человека. В классе People<br>';
        }
    }
    public function setAge($age){
        if (!empty($age)){
            $this->age=$age;
        }else{
            $this->name=0;
            return 'Не введен возраст человека. В классе People<br>';
        }
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }

    public function show(){
        return 'Имя - '.$this->getName().'<br> Возраст человека - '.$this->getAge();
    }
}