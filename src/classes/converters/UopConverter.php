<?php
namespace App\Classes\Converters;

use App\Interfaces\Converter;

class UopConverter implements Converter
{
    public function convert(float $salaryGross): float
    {
        $salaryNet = $salaryGross - ($salaryGross* Converter::ZUS);
        return  $salaryNet;
    }
}
