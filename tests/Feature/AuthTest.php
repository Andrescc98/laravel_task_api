<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function register()
    {
        $this->withoutExceptionHandling();
        $data = [
            "name" => "edward",
            "email" => "aaa@gmail.com",
            "password" => "fljgjdkskd333",
            "password_confirmation" => "fljgjdkskd333"
        ];

        $this->postJson("register", $data)
        ->assertStatus(201);

        $this->assertDatabaseHas("users", [
            "email" => $data["email"]
        ]);
    }

    /** @test */

    public function login()
    {


        //registro de usuario
        $data = [
            "name" => "edward",
            "email" => "aaa@gmail.com",
            "password" => "fljgjdkskd333",
            "password_confirmation" => "fljgjdkskd333"
        ];
        $this->postJson("register", $data);

        //envio de login
        $this->postJson("login", [
            "email" => $data["email"],
            "password" => $data["password"]
        ])
            ->assertStatus(204);
    }


}
