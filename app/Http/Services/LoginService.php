<?php


namespace App\Http\Services;


use App\Http\Repositories\LoginRepository;
use Illuminate\Support\Facades\Auth;

class LoginService
{
    protected $loginRepo;

    public function __construct(LoginRepository $loginRepository)
    {
        $this->loginRepo = $loginRepository;
    }

    function login($request)
    {
        $user = [
            'username' => $request->email,
            'password' => $request->password
        ];

        return $this->loginRepo->checkAccount($user);
    }
}
