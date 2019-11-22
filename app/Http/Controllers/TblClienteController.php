<?php

namespace App\Http\Controllers;

use App\tbl_cliente;
use Illuminate\Http\Request;

class TblClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('clientes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
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

        tbl_cliente::insert($datosProveedor);
        return response()->json($datosProveedor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_cliente  $tbl_cliente
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_cliente $tbl_cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_cliente  $tbl_cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_cliente $tbl_cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_cliente  $tbl_cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_cliente $tbl_cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_cliente  $tbl_cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_cliente $tbl_cliente)
    {
        //
    }
}
