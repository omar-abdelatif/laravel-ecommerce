<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function AdminUsers()
    {
        $users = User::paginate();

        return view('admin.pages.users', compact('users'));
    }
}
