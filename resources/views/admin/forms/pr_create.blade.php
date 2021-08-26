@extends('layouts.dash')
@section('content')
 <div class="row">
  <div class="col-12">
   <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
     <div class="card-header">
      <h4>Write Product</h4>
     </div>
     <div class="card-body">
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
       <div class="col-sm-12 col-md-7">
        <input type="text" name="title" class="form-control {{ $errors->first('title') ? 'is-invalid' : ' ' }}">
        @error('title')
         <div class="invalid-feedback">
          {{ $errors->first('title') }}
         </div>

        @enderror
       </div>
      </div>

      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About</label>
       <div class="col-sm-12 col-md-7">
        <textarea class="summernote-simple {{ $errors->first('about') ? 'is-invalid' : ' ' }}" name="about"></textarea>
        @error('about')
         <div class="invalid-feedback">
          {{ $errors->first('about') }}
         </div>

        @enderror
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
        <input type="number" name="price" class="form-control {{ $errors->first('price') ? 'is-invalid' : ' ' }}">
        @error('price')
         <div class="invalid-feedback">
          {{ $errors->first('price') }}
         </div>

        @enderror
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
        <input type="text" name="instock" class="form-control currency  {{ $errors->first('instock') ? 'is-invalid' : ' ' }}">

        @error('instock')
         <div class="invalid-feedback">
          {{ $errors->first('instock') }}
         </div>

        @enderror
       </div>
      </div>




      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
       <div class="col-sm-12 col-md-7">
        <select name="category_id" class="form-control selectric {{ $errors->first('category_id') ? 'is-invalid' : ' ' }}">
         <option hidden selected> Category select</option>
         @foreach ($categories as $item)
          <option value="{{ $item->id }}">{{ $item->name }}</option>
         @endforeach



        </select>
        @error('category_id')
         <div class="invalid-feedback">
          {{ $errors->first('category_id') }}
         </div>

        @enderror
       </div>
      </div>


      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Discription</label>
       <div class="col-sm-12 col-md-7 {{ $errors->first('discription') ? 'is-invalid' : ' ' }}">
        <textarea class="summernote-simple " name="discription"></textarea>
        @error('discription')
         <div class="invalid-feedback">
          {{ $errors->first('discription') }}
         </div>

        @enderror
       </div>
    </div>


      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
       <div class="col-sm-12 col-md-7">
        <div id="image-preview {{ $errors->first('image') ? 'is-invalid' : ' ' }}" class="image-preview">
         <label for="image-upload" id="image-label">Choose File</label>
         <input type="file" name="image" id="image-upload" />
         @error('image')
          <div class="invalid-feedback">
           {{ $errors->first('image') }}
          </div>

         @enderror
        </div>
       </div>
      </div>

      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
       <div class="col-sm-12 col-md-7 {{ $errors->first('images') ? 'is-invalid' : ' ' }}">

        <label for="image-upload" id="image-label">Choose File</label>
        <input type="file" name="images[]" id="image-upload" multiple />
        @error('images')
         <div class="invalid-feedback">
          {{ $errors->first('images') }}
         </div>

        @enderror
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
