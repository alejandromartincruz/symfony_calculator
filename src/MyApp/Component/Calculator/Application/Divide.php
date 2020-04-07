<?php

namespace MyApp\Component\Calculator\Application;

class Divide
{

    public function execute(int $v1, int $v2): float
    {
        return $v1 / max($v2, 1);
    }

}