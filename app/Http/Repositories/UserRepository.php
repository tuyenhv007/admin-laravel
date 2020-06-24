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

    function save($user)
    {
        return $user->save();
    }

    function find($id) {
        return $this->user->findOrFail($id);
    }

    function destroy($user)
    {
        $user->delete();
    }
}
