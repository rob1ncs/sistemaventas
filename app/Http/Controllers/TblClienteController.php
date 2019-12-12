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
        $datos = request()->except('_token');

        $cliente = self::valida_cliente($datos['rut']);
        $hoy = date('Y-m-d H:i:s');

        if(!$cliente){
            $registrar['rut'] = $datos['rut'];
            $registrar['nombre'] = $datos['nombre'];
            $registrar['apellido'] = $datos['apellido'];

            tbl_cliente::insert($registrar);
        }

        $monto = (new TblDetalleController)->obtener_monto();
        $id_cliente = tbl_cliente::where('rut','=',$datos['rut'])->select('id')->first();

        $factura['id_cliente'] = $id_cliente->id;
        $factura['fecha'] = $hoy;
        $factura['total'] = $monto;
        $factura['medio_pago'] = $datos['pago'];

        $registra_factura = (new TblFacturaController)->store($factura);
        $ac_compra = (new TblProductoController)->compra();
        $ac_factura = (new TblDetalleController)->actualiza_detalle();
        $productos = (new TblProductoController)->terminar_compra();

        return view('ventas.index',$productos);
        //return $hoy;
        //return response()->json($cliente);
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

    public static function valida_cliente($rut){

        $cliente = tbl_cliente::where('rut','=',$rut)->get();

        if(count($cliente)==0){
            return false;
        }else{
            return true;
        }
        //return $cliente;
    }
}
