<?php

namespace App\Http\Services;


use App\Models\Product;

class ProductService
{
    // Category Index
   public function index($request)
    {
    $sort_by = $request->sort_by ?? 'id';
    $dir = $request->dir ?? 'desc';
    $per_page = $request->limit ?? PERPAGE_PAGINATION; // 4

    
    $products = Product::orderBy($sort_by, $dir)
                    ->paginate($per_page);
        return view('backend.product.all_product',compact('products'));
    
    }


    // Store Product
    public function store($request)
    {
    // Check for duplicate name
    if (Product::where('name', $request->name)->first()) {
        return errorResponse('Name already exists.');
    }

    // Handle image upload
    $save_url = 'upload/no_image.png'; // default
    if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('uploads/products'), $imageName);

    $save_url = 'uploads/products/' . $imageName;
    }

    // Prepare data
    $data = [
        'name' => $request->name,
        'image' => $save_url,
        'category_id' => $request->category_id,
        'description' => $request->description,
        'stock' => $request->stock,
        'unit' => $request->unit,
        'buying_price' => $request->buying_price,
        'selling_price' => $request->selling_price,
        'status' => $request->status,
    ];

    try {
        $product = Product::create($data);
        return redirect()->route('all.product')
            ->with([
                'message' => 'Product created successfully',
                'alert-type' => 'success'
                ])
            ->with('product', $product);
    } catch (\Exception $e) {
        return errorResponse($e->getMessage());
    }

    }


    // Update Product
    public function update($request, $id)
    {
        $product = Product::findOrFail($id);
        $name = Product::where('name', $request->name)->where('id', '!=', $id)->first();
        if ($name) {
            return errorResponse('Name already exists.');
        }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/products'), $imageName);
                $save_url = 'uploads/products/' . $imageName;
                $product->image = $save_url;
            }

        $data = [
            'name' => $request->name,
            'image' => $product->image,
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'unit' => $request->unit,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'description' => $request->description,
            'status' => $request->status,
        ];
        try {
            $product->update($data);
             return redirect()->route('all.product')
            ->with([
                'message' => 'Product updated successfully',
                'alert-type' => 'success'
                ]);
        } catch (\Exception $e) {
            return errorResponse($e->getMessage());
        }
    }

    // Delete Product
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        try {
            $product->delete();
            return redirect()->route('all.product')
            ->with([
                'message' => 'Product deleted successfully',
                'alert-type' => 'success'
                ]);
        } catch (\Exception $e) {
            return errorResponse($e->getMessage());
        }               
    }   
}