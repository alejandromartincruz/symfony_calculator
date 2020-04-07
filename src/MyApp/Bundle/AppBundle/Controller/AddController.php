<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Response;

class AddController
{

    public function executeAction($param1, $param2)
    {
        $calculator = new Calculator();
        return new Response((int)$calculator->add( (int)$param1, (int)$param2));
    }

}