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
        schema::dropIfExists('robot'); 
        Schema::create('robot', function (Blueprint $table) {
            $table->id();
            $table->char('nama');
            $table->string('nama_posisi');
            $table->char('tipe');
            $table->string('baterai');
            $table->string('warna');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            
            $table->foreign('nama_posisi')->references('nama_posisi')->on('checkpoint');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('robot');
    }
};
