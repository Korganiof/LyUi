<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.10.2014
 * Time: 13:50
 */
class UserTableSeeder extends Seeder
{

    public function run(){
        DB::table('users')->delete();
        User::create(array(
            'name' => 'Joonas Korgan',
            'username' => "Joonas",
            'email' => "joonas.korgan@gmail.com",
            'password' => Hash::make('cool'),
        ));
    }

}