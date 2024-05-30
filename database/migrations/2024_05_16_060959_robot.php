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
        Schema::dropIfExists('robot');
        Schema::create('robot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_robot');
            $table->char('nama');
            $table->char('tipe');
            $table->string('baterai');
            $table->string('warna');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            
            $table->foreign('id_robot')->references('id')->on('checkpoint');

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
