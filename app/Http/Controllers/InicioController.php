<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //cabezales de reciente ingreso 

        $predios = Predio::with('files')->get();

        //cabezales por ingresar 

        $featured = Predio::whereYear('created_at', '2020')
            ->get();

        // dd($predios);

        return view('Front-end.index', compact('predios', 'featured'));
    }


    public function show($id)
    {

        $predios =  Predio::findOrFail($id);

        $files = $predios->files()->get();


        // dd($predios);

        return view('Front-end.show', compact('predios', 'files'));
    }


    // Pagina de inicio cabezales


    public function cabezales()
    {
        $predios = Predio::all();
        return view('Front-end.cabezales.index',compact('predios'));
    }


}
