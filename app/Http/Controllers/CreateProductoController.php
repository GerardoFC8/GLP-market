<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use Illuminate\Support\Facades\Storage;

class CreateProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Producto = productos::all();
        return view('CRUD.index')->with('Producto', $Producto);
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
        
        $Producto = new productos();

        $Producto->Nombre = $request->get('Producto');
        $Producto->Categoria = $request->get('Categoria');
        $Producto->Imagen_producto = $request->get('Imagen');
        if($request->hasFile('Imagen')){
            $Producto['Imagen_producto']=$request->file('Imagen')->store('uploads', 'public');
        }
        $Producto->Descripcion = $request->get('Descripcion');
        $Producto->Precio = $request->get('Precio');
        
        $Producto->save();

        return redirect('/crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Producto = productos::find($id);
        return view('CRUD.edit')->with('producto', $Producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if($request->hasFile('Imagen')){
            $Producto = productos::find($id);
            Storage::delete('public/'.$Producto->Imagen);
            $Producto['Imagen_producto']=$request->file('Imagen')->store('uploads', 'public');
        }

        $Producto = productos::find($id);

        $Producto->Nombre = $request->get('Producto');
        $Producto->Categoria = $request->get('Categoria');
        $Producto->Imagen_producto = $request->get('Imagen');
        if($request->hasFile('Imagen')){
            $Producto['Imagen_producto']=$request->file('Imagen')->store('uploads', 'public');
        }
        $Producto->Descripcion = $request->get('Descripcion');
        $Producto->Precio = $request->get('Precio');
        
        $Producto->save();

        return redirect('/crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Producto = productos::find($id);
        $Producto->delete();
        return redirect('/crud');
    }
}
