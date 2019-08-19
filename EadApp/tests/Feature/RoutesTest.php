<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    use RefreshDatabase;
    public function testIndexRoute()
    {
        $response = $this->get("/");

        $response->assertStatus(200);
    }
    public function testLoginRoute()
    {
        $response = $this->get("/login");

        $response->assertStatus(200);
    }

    public function testRegisterRoute()
    {
        $response = $this->get("/register");

        $response->assertStatus(200);
    }
    public function checkUserProfileRoute()
    {
        $user = \App\User::create([
            "email"    => "admin@admin.com",
            "name"     => "admin",
            "password" => bcrypt(12345)
        ]);

        $response = $this->get('profile/'.$user->id);

    }

}
