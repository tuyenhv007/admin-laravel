<?php

namespace App\Http\Controllers;

use App\Http\Services\LoginService;
use foo\bar;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    function showFormLogin()
    {
        return view('admin.login');
    }

    function login(Request $request)
    {
        if (!$this->loginService->login($request)){
            return back();
        }

        return redirect()->route('admin.dashboard');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
