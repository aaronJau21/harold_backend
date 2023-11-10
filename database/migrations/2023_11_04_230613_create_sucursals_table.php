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
        Schema::create('sucursals', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->string('store_wise_topic')->nullable();
            $table->string('customer_wise_topic')->nullable();
            $table->string('delivery_wise_topic')->nullable();
            $table->integer('cash_on_delivery')->nullable();
            $table->integer('digital_payment')->nullable();
            $table->float('increased_delivery_free')->nullable();
            $table->integer('increased_delivery_free_status')->nullable();
            $table->string('increased_delivery_charge_message')->nullable();
            $table->integer('offline_payment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursals');
    }
};
