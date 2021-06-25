<?php

namespace App\Imports;

use App\Emailadres;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmailadresImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Emailadres([
            'email' => $row['email'],
            'mailgroep-id' => 1,
        ]);
    }
}
