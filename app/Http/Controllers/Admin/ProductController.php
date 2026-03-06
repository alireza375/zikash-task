<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    private $productService;
     public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }


    // Product Index
    public function AllProduct(Request $request)
    {        
        return $this->productService->index($request);
    }
    
    

    public function AddProduct(){
        $categories = Category::latest()->get();
        return view('backend.product.add_product',compact('categories'));
    }

    public function StoreProduct(Request $request)
    {
       return $this->productService->store($request);
    }

    public function EditProduct($id){
        $product = Product::findOrFail($id);
        $categories = Category::latest()->get();
        return view('backend.product.edit_product',compact('product','categories'));
    }


    public function UpdateProduct(Request $request, $id)
    {
      return $this->productService->update($request, $id);
    }

    public function DeleteProduct($id){
        return $this->productService->delete($id);
    }


}
