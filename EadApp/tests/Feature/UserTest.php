<?php


namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateUser()
    {
        
        \App\User::create([
             'name'     => 'Admin User',
             'email'    => 'admin@admin.com',
             'password' =>  \bcrypt(12345) 
            
        ]);

        $this->assertDatabaseHas('users', ['name' => 'Admin User']);
    }
    public function testCreateUserProfile()
    {
        $user = \App\User::create([
            'name'     => 'Admin User',
            'email'    => 'admin@admin.com',
            'password' =>  \bcrypt(12345) 
           
        ]);
        $user_profile = \App\UserProfile::create([
            'user_id' => $user->id,
            'address' =>'42 Road St',
            'state'   =>'FL',
            'zip'     =>'3232'
        ]);
        $this->assertDatabaseHas('users', ['name' => 'Admin User']);   
    }
   

}
