<?php

namespace App\FactoryPattern\service;

use App\FactoryPattern\Formatter;

class JsonFormatter implements Formatter
{
    public function format(array $data):string
    {
        return json_encode($data);
    }
}
