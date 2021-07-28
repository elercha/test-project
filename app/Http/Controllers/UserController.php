<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(CreateUserRequest $request)
    {
        $user = User::create($request->all());
        return $user->id;
    }

    public function create()
    {
        return view('users.create');
    }
}
