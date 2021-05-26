<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'      => 'Jhon Doe',
            'email'     => 'jhon@doe.com',
            'password'  => \bcrypt('secret'),
        ]);
    }
}
