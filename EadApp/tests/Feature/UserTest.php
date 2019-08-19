<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function testUserCreate()
    {
        $user = \App\User::create([
            "email"    => "admin@admin.com",
            "name"     => "admin",
            "password" => bcrypt(12345)
        ]);

        $this->assertDatabaseHas('users', [
            'email'    => $user->email,
            'name'     => $user->name,
            'password' => $user->password
        ]);
    }
    public function testUserProfileCreate()
    {
        $user = \App\User::create([
            "email"    => "admin@admin.com",
            "name"     => "admin",
            "password" => bcrypt(12345)
        ]);
        $profile = \App\UserProfile::create ([
            'id_user' => $user->id,
            'address' => 'Rua teste teste',
            'phone'   => 1434341563,
            'whoami'  => 'Um programador muito bom que testa as coisas antes de mandar para produção'
        ]);

        $this->assertDatabaseHas('user_profiles', [
            'id_user' => $user->id,
            'address' => 'Rua teste teste',
            'phone'   => 1434341563,
            'whoami'  => 'Um programador muito bom que testa as coisas antes de mandar para produção'
        ]);

    }



}
