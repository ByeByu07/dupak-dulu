<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'email' => 'halo@gmail.com',
            'wa' => '085710910867',
            'password' => bcrypt('password')
        ]);

        User::create([
            'email' => 'hoho@gmail.com',
            'wa' => '085710910867',
            'password' => bcrypt('password')
        ]);
    }
}
