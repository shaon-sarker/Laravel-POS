<?php

namespace App\Imports;

use App\Models\Employee;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;


class EmployeeImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Employee([
            'name' => $row[0],
            'email' => $row[1],
            'phone' => $row[2],
            'address' => $row[3],
            'salary' => $row[4],
            'vacation' => $row[5],
            'city' => $row[6],
            'experience' => $row[7],
            'image' => $row[8],
        ]);
    }
}
