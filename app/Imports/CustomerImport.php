<?php

namespace App\Imports;

use App\Models\Customer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Customer([
            'name' => $row[0],
            'email' => $row[1],
            'phone' => $row[2],
            'address' => $row[3],
            'shopname' => $row[4],
            'account_holder' => $row[5],
            'account_number' => $row[6],
            'bank_name' => $row[7],
            'bank_branch' => $row[8],
            'city' => $row[9],
            'image' => $row[10],
        ]);
    }
}
