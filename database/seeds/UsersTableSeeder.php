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
        //
        DB::table('users')->insert([
            [
            'name' => '映画太郎',
            'email' => 'aaaa@sample.com',
            'password' => Hash::make('pass1234'),
            ],[
            'name' => '映画花子',
            'email' => 'bbbb@sample.com',
            'password' => Hash::make('pass1234'),
            ],[
            'name' => 'ムービー太郎',
            'email' => 'cccc@sample.com',
            'password' => Hash::make('pass1234'),
            ],[
            'name' => 'ムービー花子',
            'email' => 'dddd@sample.com',
            'password' => Hash::make('pass1234'),
            ]
        ]);
    }
}
