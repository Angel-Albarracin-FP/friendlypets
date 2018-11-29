<?php

use Illuminate\Database\Seeder;
use FriendlyPets\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();

        User::create([
            'name' => 'Angel Albarracin',
            'email' => 'angel.albarracin.cv@gmail.com',
            'password' => Hash::make('asdasd'),
        ]);

        DB::table('role_user')->insert([
            [
              'user_id' => '6',
              'role_id' => '5',
            ],
        ]);

    }
}
