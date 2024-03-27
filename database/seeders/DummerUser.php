<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummerUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Operator',
                'email'=>'operator@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('operator')
            ],
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('operator')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
            

    }

}
