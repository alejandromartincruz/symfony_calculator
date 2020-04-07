<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SubtractController
{

    public function executeAction($param1, Request $request)
    {
        $param2 = $request->query->get('param2');
        $calculator = new Calculator();
        return new Response((int)$calculator->subtract((int) $param1, (int)$param2));
    }

}