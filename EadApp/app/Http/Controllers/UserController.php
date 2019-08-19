<?php

namespace App\Http\Controllers;

use App\User;
use App\UserProfile;
use Illuminate\Support\Facades\Auth;
use Request;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function userProfile()
    {
        $id   = Request::route('user');
        $user = User::findOrFail($id);

        dd($user);
    }

    public function returnCreateUserProfileForm()
    {
        return view('users/create_profile');
    }

    public function createUserProfile(){
        $id = auth()->user()->id;

        UserProfile::create([
            "id_user" => $id,
            "phone" => Request::input("phone"),
            "address" => Request::input("address"),
            "whoami" => Request::input("whoami")

        ]);

        return redirect("/home");
    }
}

