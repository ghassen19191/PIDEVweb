<?php


namespace App\Services;

use EntityToExcel\Services\DataTransformer;


class PropertyExtractor
{
    public static function extractProperties($classFQCN)
    {
        $class = new \ReflectionClass($classFQCN);
        $properties = $class->getProperties();
        return $properties;
    }
}
