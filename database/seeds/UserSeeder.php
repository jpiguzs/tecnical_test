<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user =[
           
            [
                'name'=> 'administrador',
                'admin'=> true,
                'email'=> 'admin@admin.com',
                'password'=> Hash::make('123456'),
                'city_id' => 1,
                'carnet_id' => '21174755',
                'birthday' => '1992/12/05'

    
            ],

    ];
    foreach ($user as $key => $value) {
        # code...
            User::create($value);
        }
    }
}