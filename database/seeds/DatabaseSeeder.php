<?php

use App\Role;
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
        Role::create([
            "role"=>"admin",
            "description"=>"administrador del sistema"
        ]);

        Role::create([
            "role"=>"user",
            "description"=>"administrador del sistema"
        ]);

        User::create([
            "name"=>"andres",
            "email"=>"ac550807@gmail.com",
            "password"=>bcrypt("12345678"),
            "role_id"=>1
        ]);

        factory(User::class, 50)->create();
    }
}
