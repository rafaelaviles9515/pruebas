<?php

namespace App\Imports;

use App\Sector;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row[1])) {
            return null;
        }

        return new Sector([
            'nombre'=> $row[1],
            'descripcion'=> $row[2],
        ]);
    }


}
