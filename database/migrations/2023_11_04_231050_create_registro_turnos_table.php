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
        Schema::create('registro_turnos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->nullable();
            $table->float('valorInicial')->nullable();
            $table->float('valorFinal')->nullable();
            $table->float('valorRecibido')->nullable();
            $table->float('valorTeorico')->nullable();
            $table->string('fechaRegistro')->nullable();
            $table->timestamps();
            $table->foreignId('caja_id')->constrained();
            $table->foreignId('usuario_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_turnos');
    }
};
