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
        Schema::create('tonkho', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nhtnamthang')->primary();
            $table->string('nhtmavt')->primary();
            $table->int('nhtsldau');
            $table->int('nhtslcuoi');
            $table->int('nhtslnhap');
            $table->int('nhtslxuat');
            $table->foreign('nhtmavt')->references('nhtmavt')->on('vattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tonkho');
    }
};
