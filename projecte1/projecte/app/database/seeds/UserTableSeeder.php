<?php

class UserTableSeeder extends Seeder {
    public function run(){
        Eloquent::unguard();
        
       DB::table('users1')->delete();
        
        $user = new User;
        $user->username = 'admin';
        $user->email = 'admin@localhost';
        $user->password = Hash::make('password');
        $user->save();
        
        
           // alternative to eloquent we can also use direct database-methods
        /*
        User::create(array(
            'username'  => 'admin',
            'password'  => Hash::make('password'),
            'email'     => 'admin@localhost'
        ));
        */
        
        
        /*$users = [
            ['username' => 'admim', 'password' => Hash::make('111') ,'email' => 'juan@email.com'],
            ['username' => 'admin', 'password' => Hash::make('111'), 'email' => 'juan1@email.com']
        ];
 
        DB::table('users1')->insert($users);*/
    }
}