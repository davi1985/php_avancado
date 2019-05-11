<?php
/*

*/
class Animal
{
    public function getName()
    {
        echo 'getName da class Animal';
    }

    public function testar()
    {
        echo 'Testando 123...';
    }
}

class Cachorro extends Animal
{
    public function getName()
    {
        $this->testar();
    }
}

// $animal = new Animal();
// $animal->getName();
$animal = new Cachorro();
$animal->getName();
