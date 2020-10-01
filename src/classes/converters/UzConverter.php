<?php
namespace App\Classes\Converters;

use App\Interfaces\Converter;

class UzConverter implements Converter
{
    public function convert(float $salaryGross): float
    {
        $salaryNet = $salaryGross* Converter::TAXDEDUCTIBLECOST;
        return  $salaryNet;
    }
}
