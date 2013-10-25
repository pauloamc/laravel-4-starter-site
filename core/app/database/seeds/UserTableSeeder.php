<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => Config::get('app.administrator.name', 'Paulo Casadinho'),
            'email' => Config::get('app.administrator.email', 'pauloamc@gmail.com'),
            'password' => Hash::make(Config::get('app.administrator.password', '12345')),
            'level' => 999,
            'active' => 1
        ));
    }
}