<?php

namespace App\Http\Controllers;

use App\Http\Requests\CateStoreValidation;
use App\Http\Requests\CateUpdateValidation;
use App\Models\Category;
use App\Models\Product;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::get();
        return view('admin.tables.categories', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.ct_create');
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
        Category::create($data);
        return redirect()->route('category.index');
    }


    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        
        return view('admin.forms.ct_edit', compact('category'));
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
        $data = $this->UserImageUpload($data, $request, '/public/category-images', $category);
        $category = $category->update($data);
        return redirect() -> route('category.index');
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
        return redirect()->route('category.index');
    }
}
