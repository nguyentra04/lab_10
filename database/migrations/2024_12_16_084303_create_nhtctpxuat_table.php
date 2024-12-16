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
        Schema::create('ctpxuat', function (Blueprint $table) {
            //$table->id();
           $table->string('nhtsopx')->primary();
           $table->string('nhtmavt')->primary();
           $table->int('nhtslxuat');
           $table->float('nhtdgxuat');
           $table->foreign('nhtsopx')->references('nhtsopx')->on('pxuat');
           $table->foreign('nhtmavt')->references('nhtmavt')->on('vattu');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctpxuat');
    }
};
