<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VendorProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorProductsController extends Controller
{
    public function index()
    {
        return view('vendor.pages.products');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'img' => ['required', 'mimes:jpeg,jpg,png', 'image'],
            'price' => ['required', 'numeric'],
            'quantity' => ['required', 'integer'],
            'review' => ['required'],
            'thumbnails' => ['array', 'image', 'mimes:jpeg,jpg,png'],
            'thumbnails.*' => ['distinct']
        ]);
        $vendor = User::where('title', $request->name);
        if ($vendor) {
            if ($request->hasFile('img')) {
                $upload = $request->file('img');
                $name = time() . '.' . $upload->getClientOriginalExtension();
                $destinationPath = public_path('assets/vendor/products/');
                $upload->move($destinationPath, $name);
            }
            if ($request->hasFile('thumbnails')) {
                foreach ($request->file('thumbnails') as $key => $value) {
                    $uploads[$key] = $value;
                    $filename[$key] = time() . "." .  $upload->getClientOriginalExtension();
                }
            }
            $thumbnails = $validated['thumbnails'];
            $store = VendorProducts::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'img' => $name,
                'price' => $validated['price'],
                'quantity' => $validated['quantity'],
                'thumbnails' => implode(',', $thumbnails),
                'vendor_id' => $vendor->id,
            ]);
            if ($store) {
                $notification = [
                    'message' => 'Product Added Successfully!',
                    'alert-type' => 'success'
                ];
                return redirect()->route('vendor.products')->with($notification);
            }
        }
        $notificationError = [
            'message' => 'Something went wrong!',
            'alert-type' => 'error'
        ];
        return redirect()->route('vendor.products')->with($notificationError);
    }
}
