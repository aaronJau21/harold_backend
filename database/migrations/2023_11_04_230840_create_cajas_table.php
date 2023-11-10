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
        Schema::create('cajas', function (Blueprint $table) {
            $table->id();
            $table->string('fecha')->nullable();
            $table->float('montoApertura')->nullable();
            $table->float('salidaEfectivo')->nullable();
            $table->foreignId('sucursal_id')->constrained();
            $table->integer('cerrada')->nullable();
            $table->timestamps();
            $table->foreignId('usuario_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cajas');
    }
};
