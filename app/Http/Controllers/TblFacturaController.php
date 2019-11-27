<?php

namespace App\Http\Controllers;

use App\tbl_factura;
use Illuminate\Http\Request;

class TblFacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = tbl_factura::get();
        
        return (response()->json($datos));
        //return view('productos.index',$datos);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_factura  $tbl_factura
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_factura $tbl_factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_factura  $tbl_factura
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_factura $tbl_factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_factura  $tbl_factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_factura $tbl_factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_factura  $tbl_factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_factura $tbl_factura)
    {
        //
    }

    public function get_id()
    {
        //
        //$datos['factura'] = tbl_factura::get();
        //$datos = tbl_factura::where('id','>',0)->first();
        $results = tbl_factura::select('SELECT MAX(id) FROM tbl_factura');

        return (response()->json($results));
        //return view('productos.index',$datos);
    }
}
