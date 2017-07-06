<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->fullname = "dechopon intakaew";
        $user->username = "admin";
        $user->email = "pppppu@hotmail.com";
        $user->password = bcrypt('1234');
        $user->save();

    }
}
