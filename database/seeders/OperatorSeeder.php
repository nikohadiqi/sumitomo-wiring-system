<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username'=>'operator',
                'role'=>'operator',
                'password'=>bcrypt('12345'),
                'id_operator'=>'11111',
                'tanggal_lahir'=>Carbon::create('2024', '02', '22'),
                'alamat'=>'Sekanak Raya',
            ],
            [
                'username'=>'admin',
                'role'=>'admin',
                'password'=>bcrypt('12345'),
                'id_operator'=>'admin',
                'tanggal_lahir'=>Carbon::create('2024', '05', '12'),
                'alamat'=>'Tanjung Sari',
            ]
        ];
        
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
