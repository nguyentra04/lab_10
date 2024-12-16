<?php
use Illuminate\Support\Facades\DB;
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
        Schema::create('donhang', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nhtsodh')->primary();
            $table->date('nhtngaydh');
            $table->string('nhtmanhacc');
            $table->foreign('nhtmanhacc')->references('nhtmanhacc')->on('nhacc');

        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donhang ');
    }
};
