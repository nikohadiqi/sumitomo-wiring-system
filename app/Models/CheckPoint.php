<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckPoint extends Model
{
    use HasFactory;

    protected $table='checkpoint';
    protected $fillable = [
        'nama_posisi',
        'status',
    ];
}
