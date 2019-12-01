<?php

namespace App\Http\Controllers;

use App\tbl_producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TblProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        $datos['productos'] = tbl_producto::get();
        //tbl_producto::where('estado','=',"activo");
        return view('productos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        
        if($request->hasFile('foto')){
            
            $datosProducto['foto'] = $request->file('foto')-store('uploads','public');
        }
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
        $producto = tbl_producto::findOrFail($id);
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

    public function get(){
        
        $datos['productos'] = tbl_producto::where('estado','=','activo')->get();
        return view('ventas.index',$datos);
    }

    public function ver($id)
    {
        //
        $producto = tbl_producto::findOrFail($id);
        return (response()->json($producto));
        //return redirect('ventas.verproducto');
    }

    public function estado_desactivado($id)
    {
        $estado = tbl_producto::where('id','=',$id)->first();
        $estado->estado = "desactivado";
        $estado->save();

        //$producto = tbl_producto::where('estado','=',"activo");
        return redirect('productos');


    }

    public function estado_activo($id)
    {

        $estado = tbl_producto::where('id','=',$id)->first();
        $estado->estado = "activo";
        $estado->save();
        
        //$producto = tbl_producto::where('estado','=',"activo");
        return redirect('productos');
    }

    public function estado_comprando($id)
    {
        //$id_factura = (new TblFacturaController)->get_id();

        $estado = tbl_producto::where('id','=',$id)->first();
        $estado->campo_compra = "comprando";
        $estado->save();
        
        //$productos = tbl_producto::where('campo_compra','=',"comprando")->get();
        //return view('ventas.create',compact('productos'));
        //return view('ventas.create',$producto);
        $num = 0;
        return $num;
    }

    public function desactivar_compra($id)
    {
        //$id_factura = (new TblFacturaController)->get_id();

        $estado = tbl_producto::where('id','=',$id)->first();
        $estado->campo_compra = "lala";
        $estado->save();
        

        $productos = tbl_producto::where('campo_compra','=',"comprando")->get();
        return view('ventas.create',compact('productos'));
        //return view('ventas.create',$producto);
    }

    public function ver_carrito(){
        $productos = tbl_producto::where('campo_compra','=',"comprando")->get();
        return view('ventas.create',compact('productos'));
    }


    public function get_stock()
    {
        
        $proveedores = tbl_producto::get();
        $proveedorArray[''] = 'Selecciona un proveedor';
        foreach($proveedores as $prov){
            $proveedorArray[$prov->id] = $stock->stock;
        }
        return $proveedorArray;
    }

}
