<?php
namespace App\Classes;

use App\Interfaces\Converter;
use App\Classes\Converters\UopConverter;
use App\Classes\Converters\UzConverter;
use App\Classes\Converters\B2bConverter;

final class ConverterFactory
{
    public static function factory(string $type): Converter
    {
        if (strcasecmp(trim($type), 'uop') == 0) {
            return new UopConverter();
        } elseif (strcasecmp(trim($type), 'b2b') == 0) {
            return new B2bConverter();
        } elseif (strcasecmp(trim($type), 'uz') == 0) {
            return new UzConverter();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}
