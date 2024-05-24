<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData =[
            [
                'name'=>'Budi',
                'email' =>'admin123@gmail.com',
                'role' => 'admin',
                'password' =>'123'


            ],
            [
                'name'=>'Yuni',
                'email' =>'yuni123@gmail.com',
                'role' => 'pegawai',
                'password' =>'123'


            ]
        ];

        foreach ($userData as $key =>$val) {
            User::created($val);
        }
    }
}
