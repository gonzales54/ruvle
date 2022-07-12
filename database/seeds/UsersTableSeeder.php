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
        /*App\User::create([
            'name' => 'User1',
            'email' => 'User@mailaddress.com',
            'password' => Hash::make('helloworld'),
        ]);*/
        factory(App\User::class, 99)->create();
    }
}
