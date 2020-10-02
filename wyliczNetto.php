<?php
require(__DIR__.'/vendor/autoload.php');
require(__DIR__.'\config.php');
use App\Classes\CsvReader;
use App\Classes\CsvUploader;
use App\Classes\ConverterFactory;
use App\Classes\EmployeeParser;
use App\Services\RequestService;

$data = [];
if (isset($argv[1]) && !empty($argv[1])) {
    $filename = $argv[1];
    $myCsv = new CsvReader($filename);
    $employees = $myCsv->parse();
} else {
    $service = new RequestService();
    $parser = new EmployeeParser();
    $response = $service->getJsonResponse(EMPLOYEES_REQUEST);
    $parser->parseJson($response);
}
// foreach ($employees as $employee) {
//     $converter = ConverterFactory::factory($employee->getContract());
//     $salaryNet = $converter->convert($employee->getSalaryGross());
//     $employee->setSalaryNet($salaryNet);
//     $data [] = $employee;
// }
// $uploader = new CsvUploader('kwoty_na_reke.csv', ',', 'w', $data);
// $uploader->upload();
