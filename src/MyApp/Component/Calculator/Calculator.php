<?php

namespace MyApp\Component\Calculator;

use MyApp\Component\Calculator\Application\Add;
use MyApp\Component\Calculator\Application\Divide;
use MyApp\Component\Calculator\Application\Multiply;
use MyApp\Component\Calculator\Application\Subtract;

class Calculator
{
    private $add;
    private $subtract;
    private $multiply;
    private $divide;

    public function __construct()
    {
        $this->add = new Add();
        $this->subtract = new Subtract();
        $this->multiply = new Multiply();
        $this->divide = new Divide();
    }

    public function add(int $v1, int $v2): int
    {
        $result = $this->add->execute($v1, $v2);
        return $result;
    }

    public function subtract(int $v1, int $v2): int
    {
        $result = $this->subtract->execute($v1, $v2);
        return $result;
    }

    public function multiply(int $v1, int $v2): int
    {
        $result = $this->multiply->execute($v1, $v2);
        return $result;
    }

    public function divide(int $v1, int $v2): float
    {
        $result = $this->divide->execute($v1, $v2);
        return $result;
    }

}