<?php

namespace App\FactoryPattern;

use App\FactoryPattern\service\CsvFormatter;
use App\FactoryPattern\service\JsonFormatter;
use http\Exception\InvalidArgumentException;

class FormatterFactory
{
    public const TYPE_JSON = 'json';
    public const TYPE_CSV  = 'csv';
    public static function build($type)
    {
        return match ($type) {
            self::TYPE_CSV => new CsvFormatter(),
            self::TYPE_JSON => new JsonFormatter(),
            default => throw new InvalidArgumentException("Invalid Formatter Type")

        };
    }

}
