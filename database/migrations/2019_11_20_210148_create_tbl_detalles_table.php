<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('telefono');
            $table->string('email');
            $table->timestamps();
        });


        Schema::create('tbl_facturas', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->unsignedInteger('id_cliente');
            $table->date('fecha');
            $table->integer('total');
            $table->string('medio_pago');
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('tbl_clientes');
        });

        Schema::create('tbl_proveedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('telefono');
            $table->string('direccion');
            $table->string('estado');

            $table->timestamps();
        });

        Schema::create('tbl_categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
        });


        Schema::create('tbl_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('precio');
            $table->integer('stock');

            $table->unsignedInteger('id_categoria');
            $table->unsignedInteger('id_proveedor');
            

            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('tbl_categorias') ->onDelete('cascade');
            $table->foreign('id_proveedor')->references('id')->on('tbl_proveedors') ->onDelete('cascade');
        });


        Schema::create('tbl_detalles', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_factura');
            $table->unsignedInteger('id_producto');
            
            $table->integer('cantidad');
            $table->integer('precio');
            $table->timestamps();

            $table->foreign('id_factura')->references('id')->on('tbl_facturas') ->onDelete('cascade');
            $table->foreign('id_producto')->references('id')->on('tbl_productos') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_detalles');
        Schema::dropIfExists('tbl_facturas');
        Schema::dropIfExists('tbl_clientes');
        Schema::dropIfExists('tbl_productos');
        Schema::dropIfExists('tbl_categorias');
        Schema::dropIfExists('tbl_proveedors');
    }
}
