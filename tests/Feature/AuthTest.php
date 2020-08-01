<?php

namespace Tests\Feature;

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

        $this->get(route("register"))
            ->assertSee("register");

        $this->post("register", $data);

        $this->assertDatabaseHas("users", [
            "email" => $data["email"]
        ]);
    }

    /** @test */

    public function login()
    {

        //vista login
        $this->get(route("login"))
            ->assertSee("login");

        //registro de usuario
        $data = [
            "name" => "edward",
            "email" => "aaa@gmail.com",
            "password" => "fljgjdkskd333",
            "password_confirmation" => "fljgjdkskd333"
        ];
        $this->post("register", $data);

        //envio de login
        $this->post("login", [
            "email" => $data["email"],
            "password" => $data["password"]
        ])
            ->assertRedirect("home");
    }
}
