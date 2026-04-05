<?php

namespace App\FactoryPattern\service;

use App\FactoryPattern\Formatter;

class CsvFormatter implements Formatter
{
    public function format(array $data)
    {
        return implode(' , ', $data);
    }
}
