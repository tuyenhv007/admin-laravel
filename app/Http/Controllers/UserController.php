<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
       $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAll();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        return view('admin.users.add');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function delete($id)
    {

        if (!array_key_exists($id, $this->listUser)) {
            abort(404);
        }

        array_splice($this->listUser, $id, 1);
        return redirect()->route('users.index');
    }

    public function calculatorAge(Request $request)
    {
        if ($request->birthday) {
            $data = $request->birthday;
            $birthday = Carbon::parse($data);
            $age = $birthday->age;
            echo Carbon::now('America/Vancouver');
           // echo "tuoi cua ban la=" . $age;
        }
        return view('admin.users.calculator-age', compact('data'));
    }
}
