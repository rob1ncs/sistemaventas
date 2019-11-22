<?php

namespace App\Http\Controllers;

use App\tbl_categoria;
use Illuminate\Http\Request;

class TblCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('categorias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.create');
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

        tbl_categoria::insert($datosProveedor);
        return response()->json($datosProveedor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_categoria  $tbl_categoria
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_categoria $tbl_categoria)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_categoria  $tbl_categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_categoria $tbl_categoria)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_categoria  $tbl_categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_categoria $tbl_categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_categoria  $tbl_categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_categoria $tbl_categoria)
    {
        //
    }
}
