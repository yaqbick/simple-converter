<?php
namespace App\Classes;

use App\Interfaces\FileReader;
use App\Classes\Employee;

class CsvReader implements FileReader
{
    private $delimiter;

    private $rowDelimiter;

    private $fileHandle = null;

    private $position = 0;
    private $data = array();

    public function __construct($filename, $delimiter = ",", $rowDelimiter = "r")
    {
        $this->fileHandle= fopen($filename, $rowDelimiter) ;
        if ($this->fileHandle === false) {
            throw new \Exception("Unable to open file: {$filename}");
        }
        $this->delimiter = $delimiter;

        $this->rowDelimiter = $rowDelimiter;

        $this->position = 0;
    }

    public function parse()
    {
        $employees = [];
        while (($data = fgetcsv($this->fileHandle, 1000, $this->delimiter)) !== false) {
            $employee = new Employee($data[0], $data[1], $data[2], $data[3], $data[4]);
            $employees[] =   $employee;
        }
        return $employees;
    }
}
