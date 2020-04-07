<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Response;

class DivideController
{

    public function executeAction($param1, $param2)
    {
        if ($param2 == 0) {
            return new Response("no se puede dividir entre 0");
        }
        $calculator = new Calculator();
        return new Response((float)$calculator->divide( (int)$param1, (int)$param2));
    }

}