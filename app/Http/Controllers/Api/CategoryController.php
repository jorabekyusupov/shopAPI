<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CateStoreValidation;
use App\Http\Requests\CateUpdateValidation;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use ImageUpload;
    public function index()
    {
       $category = CategoryResource::collection(Category::get());
       return response()->successJson($category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CateStoreValidation $request)
    {
        $data = $request->validated();
        $data = $this->UserImageUpload($data, $request, '/public/category-images');
        $data = Category::create($data);
        return response()->successJson($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CateUpdateValidation $request, Category $category)
    {
        $data = $request->validated();
        $data = $this->UserImageUpload($data, $request, '/app/public/category-images', $category);
        $category = $category->update($data);
        return response()->successJson($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->image) {
            if (file_exists(storage_path() . '/app/public/category-images/' . $category->image)) {
                unlink(storage_path() . '/app/public/category-images/' . $category->image);
            }
        }
        $category->delete();
        return response()->successJson();
    }
}
