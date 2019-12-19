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

        $id_factura = (new TblFacturaController)->get_id();

        if($datos['campo_descuento']){
            $detalle['precio'] = $datos['campo_descuento'] * $datos['stock'];
        }else{
            $detalle['precio'] = $datos['precio'] * $datos['stock'];
        }

        $detalle['id_producto'] = $datos['id'];
        $detalle['cantidad'] = $datos['stock'];
        

        $id_producto = tbl_detalle::whereNull('id_factura')
        ->where('id_producto','=',$datos['id'])
        ->select('id_producto')
        ->groupBy('id_producto')->get();

        if(count($id_producto) == 0){
            tbl_detalle::insert($detalle);
        }

        
        $res_producto = (new TblProductoController)->estado_comprando($datos['id']);
        
        

        $productos = tbl_detalle::leftJoin('tbl_productos',function($join){
            $join->on('tbl_detalles.id_producto','=','tbl_productos.id');
        })
        ->select('tbl_productos.id as id','tbl_productos.foto','tbl_productos.nombre','tbl_productos.precio','tbl_detalles.precio as valor','tbl_detalles.cantidad')
        ->where('tbl_productos.campo_compra','=','comprando')
        ->whereNull('id_factura')
        ->get();
        

        return view('ventas.create',compact('productos'));
        //return $id_factura;
        //return gettype($datosProducto);
        //return $productos;
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
    public function destroy($id)
    {
        tbl_detalle::where('id_producto','=',$id)->delete();

        $productos = tbl_detalle::leftJoin('tbl_productos',function($join){
            $join->on('tbl_detalles.id_producto','=','tbl_productos.id');
        })
        ->select('tbl_productos.id as id','tbl_productos.foto','tbl_productos.nombre','tbl_productos.precio','tbl_detalles.precio as valor','tbl_detalles.cantidad')
        ->where('tbl_productos.campo_compra','=','comprando')
        ->whereNull('id_factura')
        ->get();

        return view('ventas.create',compact('productos'));
    }



    public function actualizar_factura($id)
    {
        $estado = tbl_detalle::whereNull('id_factura')
        ->update(['id_factura' => $id-1]);

        $productos = tbl_detalle::where('id_factura','=',$id);

        return $productos;

    }

    public function obtener_monto()
    {

        $monto = tbl_detalle::whereNull('id_factura')
        ->sum('precio');

        return $monto;
    }


    public function actualiza_detalle()
    {

        $id_factura = (new TblFacturaController)->get_id();

        $estado = tbl_detalle::whereNull('id_factura')
        ->update(['id_factura' => $id_factura]);
            
    }


    public function obtener_stock($id)
    {

        $cantidad = tbl_detalle::whereNull('id_factura')
        ->where('id_producto','=',$id)
        ->select('cantidad')
        ->first();

        return $cantidad;
    }

    public function obtener_detalle($id)
    {
        
        $detalles = tbl_detalle::select('tbl_productos.foto as foto',
                                        'tbl_productos.nombre as nombre',
                                        'tbl_productos.descripcion as descripcion',
                                        'tbl_detalles.cantidad as cantidad',
                                        'tbl_detalles.precio as precio',
                                        'tbl_detalles.id as total')
        ->join('tbl_productos','tbl_productos.id','=','tbl_detalles.id_producto')
        ->where('tbl_detalles.id_factura','=',$id)->get();

        $total = tbl_detalle::where('id_factura','=',$id)->sum('precio');

        // for($i=0;$i<count($detalles);$i++){
        //     $detalles[$i]->total = $total;
        // }
        //$detalles['total'] = $total;

        //return $detalles;
        //return (response()->json($detalles));
        return view('ventas.ver_venta')->with('detalles',$detalles)->with('total',$total);
    }

    public function get_productos(){

        $productos = DB::table("tbl_detalles")
        ->join('tbl_productos','tbl_productos.id','=','tbl_detalles.id_producto')
        ->select(DB::raw('COUNT(tbl_detalles.id_producto) as total, tbl_productos.nombre'))
        ->groupBy('id_producto','nombre')
        ->orderBy('total','DESC')
        ->get();

        
        
        return $productos;
    }
    

    public function get_categorias(){

        $categorias = DB::table("tbl_detalles")
        ->join('tbl_productos','tbl_productos.id','=','tbl_detalles.id_producto')
        ->join('tbl_categorias','tbl_categorias.id','=','tbl_productos.id_categoria')
        ->select(DB::raw('COUNT(tbl_detalles.id_producto) as total, tbl_categorias.nombre'))
        ->groupBy('nombre')
        ->orderBy('total','DESC')
        ->get();

        
        
        return $categorias;
    }
}
