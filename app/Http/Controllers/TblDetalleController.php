<?php

namespace App\Http\Controllers;

use App\tbl_detalle;
use Illuminate\Http\Request;
use DB;

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
        $datos = request()->except('_token');

        $productos = (new TblProductoController)->ver($datos['id']);
        $id_factura = (new TblFacturaController)->get_id();

        //$detalle['id_detalle'] = $id_factura;
        $detalle['id_producto'] = $datos['id'];
        $detalle['cantidad'] = $datos['stock'];
        $detalle['precio'] = $datos['precio'] * $datos['stock'];
        
        //tbl_detalle::insert($detalle);
        #Se actualiza estado en el producto
        $estado = (new TblProductoController)->estado_comprando($datos['id']);


        $productos = tbl_detalle::where('tbl_detalles.id_producto','tbl_productos.id')
        ->join('tbl_productos','tbl_detalles.id_productos','=','tbl_productos.id')
        ->select('tbl_productos.foto','tbl_productos.nombre','tbl_detalles.precio','tbl_detalles.cantidad')->get();
        //$productos = tbl_detalle::where('id_producto','=',"null")->get();
        //$productos = tbl_detalle::select("SELECT d.cantidad, d.precio, p.foto, p.nombre FROM tbl_detalles d, tbl_productos p WHERE d.id_producto = p.id")->get();
        // $productos = tbl_detalle::where('tbl_detalles.id_producto','=','p.id')
        // ->join('tbl_productos as p', 'p.id', '=', 'tbl_detalles.id_producto')
        // ->select('p.foto','p.nombre','tbl_detalles.cantidad','tbl_detalles.precio')
        // ->get();

        //$productos = (new TblProductoController)->ver($prod[0]->id_producto);
        
        //return view('ventas.create',compact('productos'));
        //return $prod;
        //return gettype($datosProducto);
        return (response()->json($productos));
        //return redirect('productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_detalle  $tbl_detalle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $categoriaArray['ID'] = $id;
        // foreach($categorias as $cat){
        //     $categoriaArray[$cat->id] = $cat->nombre;
        // }
        return $categoriaArray; 
        //return (response()->json($id));
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
