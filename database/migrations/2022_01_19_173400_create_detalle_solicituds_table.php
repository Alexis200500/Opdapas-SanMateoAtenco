<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_solicituds', function (Blueprint $table) {
            $table->bigIncrements('id_detalle');
                $table->string('status_detalle');
                $table->string('fecha_detalle');
                $table->string('descripcion_detalle');
                $table->string('litros_detalle');
                $table->biginteger('id_tipo_solicitud')->unsigned();
                $table->foreign('id_tipo_solicitud')->references('id_tipo_solicitud')->on('tipo_solicituds');
                $table->biginteger('id_solicitud')->unsigned();
                $table->foreign('id_solicitud')->references('id_solicitud')->on('solicituds');
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
        Schema::dropIfExists('detalle_solicituds');
    }
}
