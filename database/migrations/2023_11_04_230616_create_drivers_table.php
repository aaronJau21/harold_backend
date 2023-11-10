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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('f_name')->nullable();  //sincronizar
            $table->string('l_name')->nullable();  //sincronizar
            $table->string('phone')->nullable();  //sincronizar
            $table->string('email')->nullable();  //sincronizar
            $table->string('identity_number')->nullable();  //sincronizar
            $table->string('identity_type')->nullable();  //sincronizar
            $table->string('password')->nullable();  //sincronizar
            $table->foreignId('sucursal_id')->constrained();  //sincronizar
            $table->timestamps();  //sincronizar
            $table->integer('status')->nullable(); //sincronizar
            $table->integer('active')->nullable(); //sincronizar
            // $table->integer('earning')->nullable();
            $table->foreignId('busine_id')->constrained(); //sincronizar
            $table->integer('order_count')->nullable(); //sincronizar
            $table->integer('assigned_order_count')->nullable(); //sincronizar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver');
    }
};
