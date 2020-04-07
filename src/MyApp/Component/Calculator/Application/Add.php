<?php

namespace MyApp\Component\Calculator\Application;

class Add
{

    public function execute(int $v1, int $v2): int
    {
        return $v1 + $v2;
    }

}