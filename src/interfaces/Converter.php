<?php

namespace App\Interfaces;

interface Converter
{
    const VAT = 0.23;
    const LINETAX = 0.19;
    const TAXDEDUCTIBLECOST = 0.5;
    const ZUS = 0.25;

    public function convert(float $salaryGross);
}
