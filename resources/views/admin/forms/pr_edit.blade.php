@extends('layouts.dash')
@section('content')
 <div class="row">
  <div class="col-12">
   <form action="{{ route('product.update', ['product'=>$product->id]) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="card">
     <div class="card-header">
      <h4>Update Product</h4>
     </div>
     <div class="card-body">
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
       <div class="col-sm-12 col-md-7">
        <input type="text" name="title" class="form-control" value="{{ $product->title }}">
       </div>
      </div>
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About</label>
       <div class="col-sm-12 col-md-7">
        <textarea class="summernote-simple" name="about">{{$product->about}}</textarea>
       </div>
      </div>
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
       <div class="col-sm-12 col-md-7 input-group">
        <div class="input-group-prepend">
         <div class="input-group-text">
          $
         </div>
        </div>
        <input value="{{$product->price}}" type="number" name="price" class="form-control">
       </div>
      </div>
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Quantity</label>
       <div class="col-sm-12 col-md-7 input-group">
        <div class="input-group-prepend">
         <div class="input-group-text">
          <i class="fas fa-warehouse"></i>
         </div>
        </div>
        <input type="text" name="instock" value="{{$product->instock}}" class="form-control currency">
       </div>
      </div>
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
       <div class="col-sm-12 col-md-7">
        <select name="category_id" class="form-control selectric">

         @foreach ($categories as $item)
          <option {{$product->category_id == $item->id ? 'selected' : ''}} value="{{ $item->id }}">{{ $item->name }}</option>

         @endforeach



        </select>
       </div>
      </div>
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Discription</label>
       <div class="col-sm-12 col-md-7">
        <textarea class="summernote-simple" name="discription">{{$product->discription}}</textarea>
       </div>
      </div>
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
       <div class="col-sm-12 col-md-7">
        <div id="image-preview" class="image-preview">
         <label for="image-upload" id="image-label">Choose File</label>
         <input type="file" name="image" id="image-upload" />
        </div>
       </div>
      </div>
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
       <div class="col-sm-12 col-md-7">

        <label for="image-upload" id="image-label">Choose File</label>
        <input type="file" name="images[]" id="image-upload" multiple />

       </div>
      </div>
      <div class="mb-4 form-group row">
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
        <div class="col-sm-12 col-md-7">
          <select class="form-control selectric" name="status">
            <option value="1">Active</option>
            <option value="0">Deactive</option>

          </select>
        </div>
      </div>

      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
       <div class="col-sm-12 col-md-7">
        <button class="btn btn-primary">Create Post</button>
       </div>
      </div>
     </div>
    </div>
   </form>
  </div>
 </div>
@endsection
