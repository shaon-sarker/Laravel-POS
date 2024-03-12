<?php

namespace App\Exports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\FromCollection;

class SupplierExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Supplier::select('name','email','phone','address','shopname','account_holder','account_number','bank_name','bank_branch','city','type','image')->get();
    }
}
