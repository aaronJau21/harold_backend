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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained(); // Sincronizar
            $table->float('order_amount')->nullable(); // Sincronizar
            $table->float('coupon_discount_amount')->nullable(); // Sincronizar
            $table->string('coupon_discount_title')->nullable(); // Sincronizar
            $table->string('payment_status')->nullable(); // Sincronizar
            $table->string('order_status')->nullable(); // Sincronizar
            // $table->float('total_tax_amount')->nullable();
            $table->string('payment_method')->nullable(); // Sincronizar
            // $table->string('transaction_reference')->nullable();
            $table->foreignId('driver_id')->constrained(); // Sincronizar 
            $table->string('coupon_code')->nullable(); // Sincronizar
            $table->integer('order_type')->nullable(); // Sincronizar
            $table->foreignId('busine_id')->constrained();
            $table->timestamps();
            $table->float('delivery_charge')->nullable(); // Sincronizar
            $table->float('store_discount_amount')->nullable(); // Sincronizar
            $table->float('original_delivery_charge')->nullable(); // Sincronizar
            $table->string('delivery_time')->nullable(); // Sincronizar
            $table->foreignId('sucursal_id')->constrained(); // Sincronizar
            $table->integer('module_id')->nullable(); // Sincronizar Crear tabla
            $table->foreignId('parcel_category_id')->constrained(); // Sincronizar
            $table->string('distance')->nullable(); // Sincronizar
            $table->float('dm_tips')->nullable(); // Sincronizar
            $table->string('free_delivery_by')->nullable(); // Sincronizar
            $table->integer('cancellation_reason')->nullable(); // Sincronizar
            $table->integer('canceled_by')->nullable(); // Sincronizar
            $table->float('additional_charge')->nullable(); // Sincronizar
            $table->float('partially_paid_amount')->nullable(); // Sincronizar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
