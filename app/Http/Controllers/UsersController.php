<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // 展示个人页面
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
