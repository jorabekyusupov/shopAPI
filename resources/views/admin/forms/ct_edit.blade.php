@extends('layouts.dash')
@section('content')
 <div class="row">
  <div class="col-12">
   <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="card">
     <div class="card-header">
      <h4>Update Category</h4>
     </div>
     <div class="card-body">
      <div class="mb-4 form-group row">
       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
       <div class="col-sm-12 col-md-7">
        <input type="text" name="name" class="form-control" value="{{ $category->name }}">
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
        <button class="btn btn-primary">Create Category</button>
       </div>
      </div>
     </div>
    </div>
   </form>
  </div>
 </div>
@endsection
