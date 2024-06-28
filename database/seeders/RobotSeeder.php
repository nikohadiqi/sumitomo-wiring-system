<?php

namespace Database\Seeders;

use App\Models\Robot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'nama'=>'Nasi Padang',
                'tipe'=>'AGV',
                'nama_posisi'=>'Gedung A',
                'baterai'=>'50%',
                'warna'=>'#537823',
            ],
            [
                'nama'=>'Nasi Lemak',
                'tipe'=>'Produksi',
                'nama_posisi'=>'Gedung B',
                'baterai'=>'90%',
                'warna'=>'#082547',
            ]
        ];
        
        foreach($userData as $key => $val){
            Robot::create($val);
        }
    }
}
