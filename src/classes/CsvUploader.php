<?php

namespace App\Classes;

class CsvUploader
{
    private $delimiter;

    private $rowDelimiter;

    private $fileHandle = null;

    private $data;

    public function __construct($filename, $delimiter = ',', $rowDelimiter = 'w', array $data)
    {
        $this->fileHandle = fopen($filename, $rowDelimiter);
        if ($this->fileHandle === false) {
            throw new \Exception("Unable to open file: {$filename}");
        }
        $this->delimiter = $delimiter;
        $this->rowDelimiter = $rowDelimiter;
        $this->data = $data;
    }

    public function upload(): void
    {
        foreach ($this->data as $employee) {
            $fields = [$employee->getFirstName(), $employee->getLastName(), $employee->getSalaryNet()];
            fputcsv($this->fileHandle, $fields);
        }
    }
}
