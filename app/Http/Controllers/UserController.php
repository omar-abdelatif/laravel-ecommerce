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
    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('admin.users')->withSuccess('Deleted Successfully!');
        }
        return redirect()->route('admin.users')->withErrors('Error Happen');
    }
}
