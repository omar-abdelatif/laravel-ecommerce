<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $allcategories = Category::all();
        $subcats = SubCategory::all();
        return view('admin.pages.subcategories', compact('allcategories', 'subcats'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required'],
            'category_name' => ['required', 'string']
        ]);
        $category = Category::where('title', $request->category_name)->first();
        if ($category) {
            // dd(true);
            $store = SubCategory::create([
                'title' => $validated['title'],
                'category_name' => $validated['category_name'],
                'category_id' => $category->id
            ]);
            if ($store) {
                $notification = [
                    'message' => 'Insertd Successfully',
                    'alert-type' => 'success'
                ];
                return redirect()->route('admin.subCategories')->with($notification);
            }
        }
        $notificationError = [
            'message' => 'Check your Inputs',
            'alert-type' => 'error',
        ];
        return redirect()->route('admin.subCategories')->with($notificationError)->withErrors($validated);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $sub = SubCategory::find($id);
        if ($sub) {
        }
    }
    public function destroy($id)
    {
        $sub = SubCategory::find($id);
        if ($sub) {
            $delete = $sub->delete();
            if ($delete) {
                $notification = [
                    'message' => 'Deleted Successfully',
                    'alert-type' => 'success'
                ];
                return redirect()->route('admin.subCategories')->with($notification);
            }
            $notificationError = [
                'message' => 'Check your Inputs',
                'alert-type' => 'error',
            ];
            return redirect()->route('admin.subCategories')->with($notificationError);
        }
    }
}
