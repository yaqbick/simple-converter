<?php
namespace App\Classes;

use DateTime;

class EmployeeParser
{
    public function parseJson($response)
    {
        $data=json_decode($response, true);
      
        foreach ($data as $key=>$employees) {
            foreach ($employees as $employee) {
                if (isset($employee['name']) && isset($employee['bornAt']) && isset($employee['gross'])) {
                    $names = explode(' ', $employee['name']);
                    $firstname = $names[0];
                    $lastname = $names[1];
                    $now = new DateTime('now');
                    $birthdate = new DateTime($employee['bornAt']);
                    $interval = $birthdate->diff($now);
                    $age = $interval->format('%R%a years');
                    var_dump($age);
                }
            }
        }
    }
}
