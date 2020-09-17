<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sector;

class SectorController extends Controller
{
     public function index()
    {
        $sectores= Sector::all();

        return view('sector.index',compact('sectores'));
    }

    public function create()
    {
        return view('sector.create');
    }

    public function store(Request $request)
    {
        Sector::create([
            'nombre'=> request('nombre'),
        ]);

        return redirect()->route('sector.index')->with('status','el equipo fue creado con exito');
    }
}
