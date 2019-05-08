<?php 
// Exemplos extraidos do manual PHP

// class ex1
class SimpleClass
{
	// declaração de propriedade
	public $var = 'um valor padrão';

	// declaração de método
	public function displayVar()
	{
		echo $this->var;
	}
}

// ex2
class A
{
	function foo()
	{
		if (isset($this)){
			echo '$this está definida(';
			echo get_class($this);
			echo ")\n";
		} else {
			echo "\$this não está definida.\n";
		}
	}
}

class B
{
	function bar()
	{
		// 
		A::foo();
	}
}

$a = new A();
$a->foo();
A::foo();
$b = new B();
$b->bar();
B::bar();
