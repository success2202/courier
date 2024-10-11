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
        Schema::create('courier_infos', function (Blueprint $table) {
            $table->id();
            $table->string('product')->nullable();
            $table->string('images')->nullable();
            $table->string('weight')->nullable();
            $table->string('amount')->nullable();
            $table->string('size')->nullable();
            $table->string('type')->nullable();
            $table->string('payment')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('sender_phone')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('sender_address')->nullable();
            $table->string('reciever_name')->nullable();
            $table->string('reciever_phone')->nullable();
            $table->string('reciever_email')->nullable();
            $table->string('reciever_address')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('pick_date')->nullable();
            $table->string('departure_date')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->string('mode')->nullable();
            $table->string('qty')->nullable();
            $table->string('frieght')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courier_infos');
    }
};
