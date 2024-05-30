<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
                'tempatlahir' =>'sidoarjo',
                'tanggal' =>'1990/5/15',
                'email' =>'admin123@gmail.com',
                'role' => 'admin',
                'password' =>bcrypt('123')


            ],
            [
                'name'=>'Yuni',
                'email' =>'yuni123@gmail.com',
                'tempatlahir' =>'sidoarjo',
                'tanggal'  => '1990/5/15',
                'role' => 'pegawai',
                'password' =>bcrypt('123')

                

            ]
        ];

            foreach ($userData as $user) {
                $existingUser = User::where('email', $user['email'])->first();
            
                if ($existingUser) {
                    echo "Email " . $user['email'] . " sudah ada dalam database.\n";
                    continue; 
                }
            }

            foreach ($userData as $key =>$val) {
                User::create($val);
            }
            
    }
        
}
