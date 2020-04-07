<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MultiplyController
{

    public function executeAction(Request $request)
    {
        $param1 = $request->query->get('param1');
        $param2 = $request->query->get('param2');
        $calculator = new Calculator();
        return new Response((int)$calculator->multiply((int) $param1, (int)$param2));
    }

}