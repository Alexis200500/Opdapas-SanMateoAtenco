<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleSolicitudsMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_solicituds_materials', function (Blueprint $table) {
                $table->bigIncrements('id_detalle_material');
                $table->string('status_detalle');
                $table->string('fecha_detalle');
                $table->string('descripcion_detalle');
                $table->string('cantidad_material');
                $table->integer('id_tipo_material')->unsigned();
                $table->foreign('id_tipo_material')->references('id_tipo_material')->on('tipo_materials');
                $table->integer('id_material')->unsigned();
                $table->foreign('id_material')->references('id_material')->on('solicituds_materials');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_solicituds_materials');
    }
}
