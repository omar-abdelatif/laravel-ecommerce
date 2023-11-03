<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function show()
    {
        return view('admin.auth.profile');
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        if ($user) {
            //! Delete Old Img
            if ($request->hasFile('img') && $user->img !== null) {
                $oldPath = public_path('assets/admin/imgs/' . $user->img);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }
            // ! Upload New Image
            if ($request->hasFile('img') && $request->file('img')->isValid()) {
                $upload = $request->file('img');
                $name = time() . '.' . $upload->getClientOriginalExtension();
                $destinationPath = public_path('assets/admin/imgs/users');
                $upload->move($destinationPath, $name);
                $user->img = $name;
            } elseif (!$request->file('img')) {
                $name = 'download.png';
            }
            $user->username = $request->username;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->address = $request->address;
            $update = $user->save();
            if ($update) {
                return redirect()->route('admin.profile.show')->withSuccess('Successfully Updated');
            }
            return redirect()->route('admin.profile.show')->withErrors('Error While Updating');
        }
    }
}
