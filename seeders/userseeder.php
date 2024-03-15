<?php
namespace Database\seeders;
use Illuminate\database\Console\Seeds\withoutModelEevents;
use Illuminate\Database\Seeder;
use App\models\user;
class userseeder extends seeder{
    public function run(){
        $user=[
            [
                'name'=> 'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123'),
                'level'=>'admin',

            ],
            [
                'name'=> 'kasir',
                'email'=>'kasir@gmail.com',
                'password'=>bcrypt('123'),
                'level'=>'kasir',
            ],
            [
                'name'=> 'manager',
                'email'=>'manager@gmail.com',
                'password'=>bcrypt('123'),
                'level'=>'manager',
            ]
        ];
        foreach ($user as $key => $value) {
           user::create($value);
        }
    }
}