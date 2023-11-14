<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asignacion_caja_repartidores', function (Blueprint $table) {
            $table->id();
            $table->float('monto')->nullable();
            $table->string('hora')->nullable();
            $table->foreignId('detalle_id')->constrained();
            $table->text('observaciones')->nullable();
            $table->integer('pagado')->nullable();
            $table->timestamps();
            $table->string('createBy')->nullable();
            $table->string('payBy')->nullable();
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('sucursal_id')->constrained();
            $table->string('busine_id')->nullable();
            $table->string('fecha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_caja_repartidores');
    }
};
