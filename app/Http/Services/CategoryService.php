<?php

namespace App\Http\Services;


use App\Models\Category;
use Illuminate\Http\Request;

class CategoryService
{
    // Category Index
   public function index(Request $request)
{
    $sort_by = $request->sort_by ?? 'id';
    $dir = $request->dir ?? 'desc';
    $per_page = $request->limit ?? PERPAGE_PAGINATION; // 4

    $categories = Category::orderBy($sort_by, $dir)
                    ->paginate($per_page);

    return view('backend.category.category_index', compact('categories'));
}

    // Store Category
    public function store($request)
    {
        $cateName = $request->name;
        if (Category::where('name', $cateName)->exists()) {
            return redirect()->back()->with([
                'error' => 'Category name already exists.',
                'alert-type' => 'error'
            ]);
        }
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($request->all());

        return redirect()->route('all.category')
            ->with([
                'message' => 'Category created successfully',
                'alert-type' => 'success'
                ]);
    }

    // Update Category
    public function update($request, $id)
    {
        $category = Category::findOrFail($id);
        $cateName = $request->name;
        if (Category::where('name', $cateName)->where('id', '!=', $id)->exists()) {
            return redirect()->back()->with('error', 'Category name already exists.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($request->all());

        return redirect()->route('all.category')
            ->with([
                'message' => 'Category updated successfully',
                'alert-type' => 'success'
                ]);
    }


    // Delete Category
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('all.category')
            ->with([
                'message' => 'Category deleted successfully',
                'alert-type' => 'success'
                ]);
    }
}