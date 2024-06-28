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
        schema::dropIfExists('checkpoint');
        Schema::create('checkpoint', function (Blueprint $table) {
            $table->id();
            $table->string('nama_posisi')->unique();
            $table->enum('status', ['Menyala', 'Tidak Menyala'])->default('Menyala');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkpoint');
    }
};
