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
        
        $facturas['facturas'] = tbl_factura::select('tbl_facturas.id as id','tbl_clientes.rut as rut','tbl_clientes.nombre as nombre','tbl_clientes.apellido as apellido','tbl_facturas.fecha as fecha','tbl_facturas.total as total','tbl_facturas.medio_pago as medio_pago')
        ->join('tbl_clientes', 'tbl_clientes.id', '=', 'tbl_facturas.id_cliente')
        ->get();

        //return (response()->json($productos));
        return view('ventas.cartola_detalle',$facturas);
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
    public function store($factura)
    {
        //
        tbl_factura::insert($factura);
        
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
        $results['facturas'] = tbl_factura::orderBy('id', 'desc')->get()->first();
        
        //$results['facturas'] = tbl_factura::get();

        $id = 0;

        if(is_null($results['facturas'])){
            $id=1;
        }else{
            foreach($results as $res){
                $id = $res->id;
            }
        }

        //$productos = (new TblDetalleController)->actualizar_factura($id);

        return $id;
        //return view('ventas.create',compact('productos'));
        //return view('productos.index',$datos);
    }

    public function get(){

        $facturas = tbl_factura::get();

        return $facturas;
    }

    



    



}
