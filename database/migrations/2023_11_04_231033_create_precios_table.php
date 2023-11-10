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
        Schema::create('precios', function (Blueprint $table) {
            $table->id();
            // $table->string('vendor_id')->nullable();
            $table->foreignId('driver_id')->constrained();
            $table->foreignId('pedido_id')->constrained();
            $table->float('order_amount')->nullable(); // Sincronizar
            $table->float('store_amount')->nullable(); // Sincronizar
            $table->float('admin_commission')->nullable(); // Sincronizar
            $table->timestamps();
            $table->float('delivery_charge')->nullable(); // Sincronizar
            $table->float('original_delivery_charge')->nullable(); // Sincronizar
            $table->foreignId('sucursal_id')->constrained();
            $table->foreignId('model_id')->constrained(); // Sincronizar
            $table->foreignId('parcel_category_id')->constrained(); // Sincronizar
            $table->float('dm_tips')->nullable(); // Sincronizar
            $table->float('delivery_fee_comission')->nullable(); // Sincronizar
            $table->float('admin_exprense')->nullable(); // Sincronizar
            $table->float('additional_charge')->nullable(); // Sincronizar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('precios');
    }
};
