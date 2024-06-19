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
                'id_robot'=>1,
                'baterai'=>'50%',
                'warna'=>'#537823',
            ],
            [
                'nama'=>'Nasi Lemak',
                'tipe'=>'Produksi',
                'id_robot'=>2,
                'baterai'=>'90%',
                'warna'=>'#082547',
            ]
        ];
        
        foreach($userData as $key => $val){
            Robot::create($val);
        }
    }
}
