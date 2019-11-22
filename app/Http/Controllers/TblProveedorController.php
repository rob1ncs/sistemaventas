<?php

namespace App\Http\Controllers;

use App\tbl_proveedor;
use Illuminate\Http\Request;

class TblProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('proveedores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedores.create');
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
        $datosProveedor=request()->except('_token');

        tbl_proveedor::insert($datosProveedor);
        return response()->json($datosProveedor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_proveedor  $tbl_proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_proveedor $tbl_proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_proveedor  $tbl_proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_proveedor $tbl_proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_proveedor  $tbl_proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_proveedor $tbl_proveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_proveedor  $tbl_proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_proveedor $tbl_proveedor)
    {
        //
    }
}
