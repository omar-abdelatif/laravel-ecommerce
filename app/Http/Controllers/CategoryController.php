<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.categories', compact('categories'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'img' => 'required', 'image', 'mimes:png,jpg,jpeg,webp', 'max:2048'
        ]);
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $upload = $request->file('img');
            $name = time() . '.' . $upload->getClientOriginalExtension();
            $destinationPath = public_path('assets/admin/categories');
            $upload->move($destinationPath, $name);
        }
        $store = Category::create([
            "title" => $validated['title'],
            'img' => $name
        ]);
        if ($store) {
            $notification = [
                'message' => 'Inserted Successfully',
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.allCategories')->with($notification);
        }
        return redirect()->route('admin.allCategories')->withErrors('Error Happen');
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        if ($category) {
            $update = $category->update($request->all());
            if ($update) {
                $notification = [
                    'message' => 'Updated Successfully',
                    'alert-type' => 'success'
                ];
                return redirect()->route('admin.allCategories')->with($notification);
            }
            return redirect()->route('admin.allCategories')->withErrors('Error Happen');
        }
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $delete = $category->delete();
            if ($delete) {
                $notification = [
                    'message' => 'Deleted Successfully',
                    'alert-type' => 'success'
                ];
                return redirect()->route('admin.allCategories')->with($notification);
            }
            return redirect()->route('admin.allCategories')->withErrors('Error Happen');
        }
    }
}
