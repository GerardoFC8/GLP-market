<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = \DB::table('servicios')
                    ->select('servicios.*')
                    ->get();
        return view('index')-> with('servicios', $servicios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProductos = request()->except('_token');

        if ($request->hasFile('Imagen_producto')){
            $datosProductos['Imagen_producto']=$request->file('Imagen_producto')->store('uploads', 'public');
        }

        productos::insert($datosProductos);
        return response()->json($datosProductos);
    }

}
