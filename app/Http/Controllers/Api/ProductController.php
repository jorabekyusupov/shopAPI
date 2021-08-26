<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdStoreValidation;
use App\Http\Requests\ProdUpdateValidation;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use ImageUpload;
    public function index(Request $request)
    {
        $products = ProductResource::collection(Product::with('category')->get());
        if ($products) {

            return response()->successJson($products);
        }
        else {
            return response()->errorJson(404, 'Products not found');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdStoreValidation $request)
    {
        // dd($request->images);
        $data = $request->validated();
        $data = $this->UserImageUpload($data, $request, '/app/public/product-images/');
        $data = $this->UserImagesUpload($data, $request, '/app/public/product-images/');
        Product::create($data);
        if ($data) {

            return response()->successJson($data);
        }
        else {
            return response()->errorJson(500, 'Product not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        if ($product) {

            return response()->successJson($product);
        }
        else {
            return response()->errorJson(404, 'product not found');
        }
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
        $data = $this->UserImageUpload($data, $request, '/app/public/product-images/', $product);
        $data = $this->UserImagesUpload($data, $request, '/app/public/product-images/', $product);
        $product = $product->update($data);
        if ($product) {

            return response()->successJson($product);
        }
        else {
            return response()->errorJson(500, 'Product not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
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
        $delete=$product->delete();
        if ($delete) {

            return response()->successJson();
        }
        else {
            return response()->errorJson(500, 'Product not deleted');
        }
    }
}
