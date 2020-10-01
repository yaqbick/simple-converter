<?php
require(__DIR__.'/vendor/autoload.php');
use App\Classes\CsvReader;
use App\Classes\CsvUploader;
use App\Classes\ConverterFactory;

$myCsv = new CsvReader("pracownicy.csv");
$employees = $myCsv->parse();
$data = [];
foreach ($employees as $employee) {
    $converter = ConverterFactory::factory($employee->getContract());
    $salaryNet = $converter->convert($employee->getSalaryGross());
    $employee->setSalaryNet($salaryNet);
    $data [] = $employee;
}
$uploader = new CsvUploader('kwoty_na_reke.csv', ',', 'w', $data);
$uploader->upload();
