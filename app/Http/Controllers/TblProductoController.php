<?php

namespace App\Http\Controllers;

use App\tbl_producto;
use Illuminate\Http\Request;

class TblProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos'] = tbl_producto::paginate(5);
        return view('productos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$proveedor['proveedor'] = tbl_proveedor::lists('nombre','id');
        //$categoria['categoria'] = tbl_categoria::lists('nombre','id');
        //return view('productos.create',compact('proveedor','categoria'));
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosProducto=request()->except('_token');
        
        tbl_producto::insert($datosProducto);
        //return (response()->json($datosProducto));
        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_producto  $tbl_producto
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_producto $tbl_producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_producto  $tbl_producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto= tbl_producto::findOrFail($id);
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_producto  $tbl_producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProducto=request()->except(['_token','_method']);
        tbl_producto::where('id','=',$id)->update($datosProducto);

        $producto= tbl_producto::findOrFail($id);
        return redirect('productos');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_producto  $tbl_producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        tbl_producto::destroy($id);
        return redirect('productos');
    }

    
}
