<?php
// Abstração de classes
abstract class Person
{
    private $name;
    private $age;

    abstract protected function walk();
    public function setName($n)
    {
        $this->name = $n;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Davi extends Person
{
    private $maried;
    private $kids;

    public function walk()
    {
    }
}

$new = new Davi();
$new->setName('Davi Silva');

echo 'O meu nome é: '.$new->getName();
