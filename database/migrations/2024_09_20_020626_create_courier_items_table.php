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
        Schema::create('courier_items', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('type');
            $table->string('sender_id');
            $table->string('reciever_id');
            $table->string('invoice_id');
            $table->string('pick_date');
            $table->string('departure_date');
            $table->string('origin');
            $table->string('destination');
            $table->string('mode');
            $table->string('qty');
            $table->string('frieght');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courier_items');
    }
};
