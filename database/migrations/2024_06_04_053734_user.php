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
        schema::dropIfExists('user');
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->char('username');
            $table->char('password');
            $table->char('id_operator');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->enum('role', ['admin', 'operator'])->default('operator');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
