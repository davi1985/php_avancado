<?php
// definindo propriedades
class Cachorro
{
	public $nome;
	private $idade;
}

$cachorro = new Cachorro();
$cachorro->nome = 'Aysha';

echo "O nome da cadela é ".$cachorro->nome.'<br>'; 
