<?php

namespace Database\Seeders;

use App\Models\CheckPoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckpointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $checkpoint = [
            [
                'nama_posisi' => 'Gedung A',
                'status' => 'Menyala'
            ],
            [
                'nama_posisi' => 'Gedung B',
                'status' => 'Menyala',
            ]
        ];

        foreach ($checkpoint as $key => $val) {
            CheckPoint::create($val);
        }
    }
}
