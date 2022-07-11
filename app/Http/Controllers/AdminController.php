<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userList()
    {
        $user = User::all();

        return view('admin.pengguna',compact('user'));
    }
}
