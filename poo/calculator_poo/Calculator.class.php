<?php
/**
 * Calculadora em POO
 */

class Calculator
{
    private $number;

    public function __construct($initialNumber)
    {
        $this->number = $initialNumber;
    }

    public function sum($numberOne)
    {
        $this->number += $numberOne;
        return $this;
    }

    public function subtraction($numberOne)
    {
        $this->number -= $numberOne;
        return $this;
    }

    public function multiplication($numberOne)
    {
        $this->number *= $numberOne;
        return $this;
    }

    public function division($numberOne)
    {
        if (!$numberOne == 0) {
            $this->number /= $numberOne;
        } else {
            $numberOne = 1;
        }
        return $this;
    }

    public function result()
    {
        return $this->number;
    }
}
