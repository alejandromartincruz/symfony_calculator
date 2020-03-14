<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController
{

    public function addAction($param1, $param2)
    {
        $calculator = new Calculator();
        return new Response((int)$calculator->add( (int)$param1, (int)$param2));
    }

    public function subtractAction($param1, Request $request)
    {
        $param2 = $request->query->get('param2');
        $calculator = new Calculator();
        return new Response((int)$calculator->subtract((int) $param1, (int)$param2));
    }

    public function multiplyAction(Request $request)
    {
        $param1 = $request->query->get('param1');
        $param2 = $request->query->get('param2');
        $calculator = new Calculator();
        return new Response((int)$calculator->multiply((int) $param1, (int)$param2));
    }

    public function divideAction($param1, $param2)
    {
        if ($param2 == 0) {
            return new Response("no se puede dividir entre 0");
        }
        $calculator = new Calculator();
        return new Response((float)$calculator->divide( (int)$param1, (int)$param2));
    }

}