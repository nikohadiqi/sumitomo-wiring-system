<?php

namespace Database\Seeders;

use App\Models\User;
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
            ],
            [
                'username'=>'admin',
                'role'=>'admin',
                'password'=>bcrypt('12345'),
            ]
        ];
        
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
