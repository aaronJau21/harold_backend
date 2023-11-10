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
        Schema::create('cuadre_repartidores', function (Blueprint $table) {
            $table->id();
            $table->float('montoAEntregar')->nullable();
            $table->float('montoEntregado')->nullable();
            $table->string('fecha')->nullable();
            $table->timestamps();
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('caja_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuadre_repartidores');
    }
};
