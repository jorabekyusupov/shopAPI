<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdStoreValidation;
use App\Http\Requests\ProdUpdateValidation;
use App\Models\Category;
use App\Models\Product;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('category')->get();
        return view('admin.tables.products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.forms.pr_create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdStoreValidation $request, Product $product)
    {
        $data = $request->validated();
        $data = $this->UserImageUpload($data, $request, '/app/public/product-images/');
        $data = $this->UserImagesUpload($data, $request, '/app/public/product-images/');
        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.forms.pr_show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('admin.forms.pr_edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdUpdateValidation $request, Product $product)
    {
        $data = $request->validated();
        $data = $this->UserImageUpload($data, $request, '/public/product-images/', $product);
        $data = $this->UserImagesUpload($data, $request, '/public/product-images/', $product);
        $product = $product->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product) {
            if ($product->image) {
                if (file_exists(storage_path() . '/app/public/product-images/' . $product->image)) {
                    unlink(storage_path() . '/app/public/product-images/' . $product->image);
                }
            }
            if ($product->images) {
                $imagesArr = explode(',', $product->images);
                foreach ($imagesArr as $item) {
                    if (file_exists(storage_path() . '/app/public/product-images/' . $item)) {
                        unlink(storage_path() . '/app/public/product-images/' . $item);
                    }
                }
            }
        }
        $product->delete();
        return redirect()->route('product.index');
    }
}
