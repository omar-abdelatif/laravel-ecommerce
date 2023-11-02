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
            'title' => 'required'
        ]);
        $store = Category::create($validated);
        if ($store) {
            return redirect()->route('admin.allCategories')->withSuccess("Inserted successfully");
        }
        return redirect()->route('admin.allCategories')->withErrors($validated);
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return redirect()->route('admin.allCategories')->withSuccess("Deleted successfully");
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
                return redirect()->route('admin.allCategories')->withSuccess('Updated Successfully');
            }
            return redirect()->route('admin.allCategories')->withErrors('Error Happen');
        }
    }
}
