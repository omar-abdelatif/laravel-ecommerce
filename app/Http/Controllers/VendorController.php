<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function VendorDashboard(){
        return view('vendor.dashboard');
    }
    public function listIndex()
    {
        return view('admin.pages.vendors');
    }
    public function inactiveVendor()
    {
        $data = User::where(['role' => 'vendor', 'status' => 'inactive'])->get();
        return view('admin.pages.inactive_vendors', compact('data'));
    }
    public function activeVendor()
    {
        $data = User::where(['role' => 'vendor', 'status' => 'active'])->get();
        return view('admin.pages.active_vendors', compact('data'));
    }
    public function storeVendor(Request $request){}
    public function destroy($id)
    {
        $vendor = User::find($id);
        if ($vendor) {
            //! Delete Old Img
            $oldPath = public_path('assets/vendor/imgs/users/' . $vendor->img);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }
            $delete = $vendor->delete();
            if ($delete) {
                $notification = [
                    'message' => "Vendor Deleted Successfully",
                    'alert-type' => 'success'
                ];
                return redirect()->back()->with($notification);
            }
        }
        $notification = [
            'message' => "Something went wrong, please try again...!!!",
            'alert-type' => 'error'
        ];
    }
}
