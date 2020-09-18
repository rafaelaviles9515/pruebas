<?php

namespace App\Exports;

use App\Sector;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithHeadings;



class UsersExport implements FromCollection,WithHeadings,WithCustomStartCell
{
    public function headings(): array
    {
        return [
             'ID',
            'Sector',
            'Date',
        ];
    }

    public function collection()
    {	
        return Sector::all();
    }

    public function startCell(): string
    {
        return 'B2';
    }

}
