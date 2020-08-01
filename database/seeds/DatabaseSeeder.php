<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            "name"=>"andres",
            "email"=>"ac550807@gmail.com",
            "password"=>bcrypt("12345678"),
        ]);
    }
}
