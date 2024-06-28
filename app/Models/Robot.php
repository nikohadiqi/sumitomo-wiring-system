<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Robot extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "robot";
    protected $fillable = [
      'nama',
      'id_robot',
      'nama_posisi',
      'tipe',
      'baterai',
      'warna',
    ];
}
