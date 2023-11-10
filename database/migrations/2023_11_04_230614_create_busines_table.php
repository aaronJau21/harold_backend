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
        Schema::create('busines', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable(); // No Sincronizar y crear una tabla nueva para las las imgs
            // $table->string('latitude')->nullable();
            // $table->string('longitude')->nullable();
            $table->string('address')->nullable(); // Sincronizar
            $table->float('comission')->nullable(); // Sincronizar
            $table->integer('status')->nullable(); // Sincronizar
            $table->timestamps();
            $table->integer('free_delivery')->nullable(); // Sincronizar
            $table->string('rating')->nullable(); // Sincronizar
            $table->integer('delivery')->nullable(); // Sincronizar
            $table->integer('take_away')->nullable(); // Sincronizar
            $table->integer('item_section')->nullable(); // Sincronizar
            $table->foreignId('sucursal_id')->constrained(); // Sincronizar
            $table->integer('active')->nullable(); // Sincronizar
            $table->float('minimum_shipping_charge')->nullable(); // Sincronizar
            $table->integer('order_count')->nullable(); // Sincronizar
            $table->integer('total_order')->nullable(); // Sincronizar
            $table->foreignId('model_id')->constrained(); // Sincronizar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business');
    }
};
