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
        $datos['categorias'] = tbl_categoria::paginate(5);
        return view('categorias.index',$datos);
        
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
        //return response()->json($datosProveedor);
        return redirect('categorias');
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
    public function edit($id)
    {
        //
        $categoria= tbl_categoria::findOrFail($id);
        return view('categorias.edit',compact('categoria'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_categoria  $tbl_categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosCategoria=request()->except(['_token','_method']);
        tbl_categoria::where('id','=',$id)->update($datosCategoria);

        $categoria= tbl_categoria::findOrFail($id);
        return redirect('categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_categoria  $tbl_categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tbl_categoria::destroy($id);
        return redirect('categorias');
    }

    public function get()
    {
        $categorias = tbl_categoria::get();
        $categoriaArray[''] = 'Selecciona una categoria';
        foreach($categorias as $cat){
            $categoriaArray[$cat->id] = $cat->nombre;
        }
        return $categoriaArray; 
    }
}
