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
        Schema::create('trackings', function (Blueprint $table) {
            $table->id('id')->nullable();
            $table->integer('courier_info_id')->nullable();
            $table->string('const_no')->nullable();
            $table->string('update_date')->nullable();
            $table->string('current_city')->nullable();
            $table->string('current_location')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('status')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
