<?php


namespace App\Http\Repositories;


use App\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function getAllUser()
    {
        return $this->user->all();
    }
}
