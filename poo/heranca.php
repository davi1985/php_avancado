<?php
// Herança de classes - 
class Animal
{
	public $name;
	private $age;
}

class Horse extends Animal
{
	private $quantidadePatas;
	private $pelagem;
}

class Cat extends Animal
{
	private $quantidadePatas;
	private $miado;
}

$horse = new Horse();
$horse->name = "Cavalo 1";

echo "O nome do cavalo é: " .$horse->name."<hr>";

class Person
{
	private $name;
	private $age;
	private $sexo;
}
class Davi extends Person
{
	public function workers()
	{
		return [$this->name, $this->age, $this->sexo];		
	}
}

$workers = new Davi;
$workers->name = 'Davi';
$workers->age = 33;
$workers->sexo = 'masculino';

foreach ($workers->workers() as $key => $value) {
	echo $value."<br>";
}
