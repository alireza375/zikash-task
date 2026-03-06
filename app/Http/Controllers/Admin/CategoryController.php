<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Services\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryService;
     public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    // Category Index
    public function AllCategory(Request $request)
    {
        return $this->categoryService->index($request);

    }

    public function AddCategory()
    {
        return view('backend.category.add_category');
    }

    // Store Category
    public function StoreCategory(Request $request)
    {
       return $this->categoryService->store($request);
    }



    public function EditCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit_category', compact('category'));
    }

    public function UpdateCategory(Request $request, $id)
    {
        return $this->categoryService->update($request, $id);
    }


    public function DeleteCategory($id)
    {
        return $this ->categoryService->delete($id);
    }
       
}
