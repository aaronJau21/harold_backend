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
        Schema::create('pedidos2', function (Blueprint $table) {
            $table->id();
            $table->string('readyHour')->nullable();
            $table->string('inBussinessAt')->nullable();
            $table->string('inBussinessHour')->nullable();
            $table->string('pickupAt')->nullable();
            $table->string('pickupHour')->nullable();
            $table->string('deliveryAt')->nullable();
            $table->string('deliveryHour')->nullable();
            $table->string('completeAt')->nullable();
            $table->string('completeHour')->nullable();
            $table->string('rejectedAt')->nullable();
            $table->string('rejectedHour')->nullable();
            $table->string('businessRejectedAt')->nullable();
            $table->string('businessRejectedHour')->nullable();
            $table->string('diverRejectAt')->nullable();
            $table->string('diverRejectHour')->nullable();
            $table->string('PickupFaileAt')->nullable();
            $table->string('PickupFaileHour')->nullable();
            $table->string('deliveryFaileAt')->nullable();
            $table->string('deliveryFaileHoure')->nullable();
            $table->string('pausedAt')->nullable();
            $table->string('pausedHour')->nullable();
            $table->string('messages')->nullable();
            $table->string('createForm')->nullable();
            $table->integer('author')->nullable();
            $table->float('comisionBusEspecial')->nullable();
            $table->float('valortAdicionalBusEspecial')->nullable();
            $table->string('tipoBusEspecial')->nullable();
            $table->float('comisionApp')->nullable();
            $table->float('comisionDriver')->nullable();
            $table->float('deliveryFeeTotal')->nullable();
            $table->float('sumaComInstDelFeeSerFee')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos2');
    }
};
