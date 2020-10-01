<?php

namespace App\Classes;

use App\Interfaces\Converter;

class Employee
{
    private $firstname;
    private $lastname;
    private $age;
    private $contract;
    private $salaryGross;
    private $salaryNet;

    public function __construct(string $firstname, string $lastname, string $age, string $contract, float $salaryGross)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->contract = $contract;
        if ($salaryGross<0) {
            throw new \Exception("Salary must be greater than 0");
        }
        $this->salaryGross = $salaryGross;
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }
    public function getLastName(): string
    {
        return $this->lastname;
    }
    public function getAge(): string
    {
        return $this->age;
    }
    public function getContract():string
    {
        return $this->contract;
    }
    public function getSalaryGross():float
    {
        return $this->salaryGross;
    }
    public function setSalaryNet(float $salaryNet) :void
    {
        $this->salaryNet = $salaryNet;
    }
    public function getSalaryNet():float
    {
        return $this->salaryNet;
    }
}
