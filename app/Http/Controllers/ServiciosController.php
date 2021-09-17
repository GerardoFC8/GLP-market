<?php

namespace App\Http\Controllers;

use App\Models\servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $filtro = $request->get('filtro');
        $productos = \DB::table('productos')
                    ->select('productos.*')
                    ->where('Categoria', 'like','%'.$filtro.'%')
                    ->orwhere('Nombre', 'like','%'.$filtro.'%')
                    ->orwhere('Descripcion', 'like','%'.$filtro.'%')
                    ->get();
        return view('productos')-> with('productos', $productos);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $filtro = $request->get('filtro');
        $productos = \DB::table('productos')
                    ->select('productos.*')
                    ->where('Categoria', 'like','%'.$filtro.'%')
                    ->orwhere('Nombre', 'like','%'.$filtro.'%')
                    ->orwhere('Descripcion', 'like','%'.$filtro.'%')
                    ->get();
        return view('productos')-> with('productos', $productos);
    }

}
