<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                $user = [

            [

               'name'=>'Admin',
               'nik'=>'1234567890',
               'tempat_lahir'=>'Rusia',
               'tanggal_lahir'=>'01/03/2013',
               'kelamin'=>'Laki-Laki',
               'agama'=>'Islam',
               'pekerjaan'=>'Dancer',
               'pendidikan'=>'S3 Perjogetan',
               'email'=>'admin@pilkades.com',
                'is_admin'=>'1',
                'surat_suara'=>'0',
               'password'=> bcrypt('12345678'),

            ],

            [

               'name'=>'User',
               'nik'=>'1234567890',
               'tempat_lahir'=>'Rusia',
               'tanggal_lahir'=>'01/03/2013',
               'kelamin'=>'Laki-Laki',
               'agama'=>'Islam',
               'pekerjaan'=>'Dancer',
               'pendidikan'=>'S3 Perjogetan',

               'email'=>'user@pilkades.com',

                'is_admin'=>'0',
                'surat_suara'=>'0',

               'password'=> bcrypt('12345678'),

            ],

        ];

  

        foreach ($user as $key => $value) {

            User::create($value);

        }
    }
}
