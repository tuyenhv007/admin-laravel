<?php


namespace App\Http\Repositories;


use Illuminate\Support\Facades\Auth;

class LoginRepository
{
    function checkAccount($user) {
        return Auth::attempt($user);
    }
}
