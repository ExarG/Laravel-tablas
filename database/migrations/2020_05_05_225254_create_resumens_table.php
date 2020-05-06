<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Monto Ministrado');
            $table->integer('Financiado');
            $table->date('Fecha de ministracion');
            $table->date('Fecha de vencimiento');
            $table->integer('Cuota');
            $table->integer('Numero de Pago');
            $table->integer('Pagos Realizados');
            $table->integer('Abonado');
            $table->integer('Saldo Pendiente');
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
        Schema::dropIfExists('resumens');
    }
}
