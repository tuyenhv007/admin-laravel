<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->username = 'admin@gmail.com';
        $user->birthday = '1997-09-02';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->save();

        $user = new \App\User();
        $user->name = 'admin2';
        $user->email = 'admin2@gmail.com';
        $user->username = 'admin2@gmail.com';
        $user->birthday = '2007-09-02';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->save();
    }
}
