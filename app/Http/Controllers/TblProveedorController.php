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
        $datos['proveedores'] = tbl_proveedor::get();
        //return response()->json($datos);
        return view('proveedores.index',$datos);
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
        //return response()->json($datosProveedor);
        return redirect('proveedores');
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
    public function edit($id)
    {
        //
        $proveedor= tbl_proveedor::findOrFail($id);
        return view('proveedores.edit',compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_proveedor  $tbl_proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProveedor=request()->except(['_token','_method']);
        tbl_proveedor::where('id','=',$id)->update($datosProveedor);

        $proveedor= tbl_proveedor::findOrFail($id);
        return redirect('proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_proveedor  $tbl_proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        tbl_proveedor::destroy($id);
        return redirect('proveedores');
    }

    public function get()
    {
        $proveedores = tbl_proveedor::get();
        $proveedorArray[''] = 'Selecciona un proveedor';
        foreach($proveedores as $prov){
            $proveedorArray[$prov->id] = $prov->nombre;
        }
        return $proveedorArray; 
    }
}
