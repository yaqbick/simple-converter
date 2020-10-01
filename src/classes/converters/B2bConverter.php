<?php
namespace App\Classes\Converters;

use App\Interfaces\Converter;

class B2bConverter implements Converter
{
    public function convert(float $salaryGross): float
    {
        $vat = Converter::VAT * $salaryGross;
        $lineTax =  Converter::LINETAX * ($salaryGross - $vat);
        $salaryNet = $salaryGross - $vat -$lineTax;
        return  $salaryNet;
    }
}
