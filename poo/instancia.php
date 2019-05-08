<?php 
class Person
{
	public $name;

	public function speak()
	{
		echo 'Person is talking.<br/>';
	}
}

class Cachorro
{
	public function latir()
	{
		echo 'Cachorro latindo.<br/>';
	}
}



// Instanciando a class
$davi = new Person();
$davi->speak();

$cachorro = new Cachorro();
$cachorro->latir();

$cachorroDois = new Cachorro();
$cachorroDois->latir();

// Chamando funções PUBLICAS das classes sem instanciar(anonônima);
Cachorro::latir();
