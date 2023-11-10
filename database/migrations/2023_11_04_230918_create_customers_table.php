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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('f_name')->nullable(); // Sincronizar
            $table->string('l_name')->nullable();// Sincronizar
            $table->string('phone')->nullable();// Sincronizar
            $table->string('email'); // Sincronizar
            $table->timestamps();
            $table->integer('status')->nullable(); // Sincronizar
            $table->integer('order_count')->nullable(); // Sincronizar
            $table->foreignId('sucursal_id')->constrained(); // Sincronizar
            $table->float('wallet_balance')->nullable(); // Sincronizar
            $table->float('loyalty_point')->nullable(); // Sincronizar
            $table->string('ref_code')->nullable(); // Sincronizar
            $table->string('current_language_key')->nullable(); // Sincronizar
            $table->string('ref_by')->nullable(); // Sincronizar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
