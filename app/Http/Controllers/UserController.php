<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    

	public function exportExcel()
	{
		return Excel::download(new UsersExport, 'user-list.xlsx');
	}


	public function importExcel(Request $request)
	{
		$file = $request->file('file');
		Excel::import(new UsersImport, $file);

		return back()->with('message','Importacion de sectores completada');
	}    
}
