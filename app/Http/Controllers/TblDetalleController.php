<?php

namespace App\Http\Controllers;

use App\tbl_detalle;
use Illuminate\Http\Request;

class TblDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $id_factura = App::make('TblFacturasController')->getIndex();

        $datos['detalle'] = tbl_detalle::get();
        $id_detalle = $datos->$id_detalle;
        
        $datos['id']=$request->file('foto')-store('uploads','public');
        

        tbl_producto::insert($datosProducto);
        //return (response()->json($datosProducto));
        return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_detalle  $tbl_detalle
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_detalle $tbl_detalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_detalle  $tbl_detalle
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_detalle $tbl_detalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_detalle  $tbl_detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_detalle $tbl_detalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_detalle  $tbl_detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_detalle $tbl_detalle)
    {
        //
    }

    
}
