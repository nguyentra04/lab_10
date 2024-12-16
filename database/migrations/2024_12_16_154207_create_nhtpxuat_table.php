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
        Schema::create('pxuat', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nhtsopx')->primary();
            $table->date('nhtngayxuat');
            $table->string('nhttenkh');
            $table->foreign('nhtsodh')->references('nhtsodh')->on('donhang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pxuat');
    }
};
