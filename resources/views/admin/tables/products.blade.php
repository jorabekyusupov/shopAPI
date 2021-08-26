@extends('layouts.dash')
@section('content')
 <div class="row">
  <div class="col-12">
   <div class="card">
    <div class="card-header">
     <h4>Products | <a href="{{ route('product.create') }}" class="btn btn-primary">Create Product</a> </h4>
    </div>
    <div class="card-body">
     <div class="table-responsive">
      <table class="table table-striped" id="table-1">
       <thead>
        <tr>
         <th class="text-start">
          ID
         </th>
         <th>Title</th>
         <th>Image</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Category</th>
         <th>Status</th>
         <th>Action</th>
        </tr>
       </thead>
       <tbody>
        @foreach ($product as $item)
         <tr>
          <td>
           {{ $item->id }}
          </td>
          <td>{{ $item->title }}</td>
          <td>
           <img alt="image" src="{{ asset('storage/product-images/' . $item->image) }}" width="35">
          </td>
          <td>{{ number_format($item->price, 2) }} So'm</td>
          <td>{{ $item->instock }}</td>

          <td>
           <div class="badge badge-shadow {{ $item->status == 1 ? 'badge-success' : 'badge-danger' }}"> {{ $item->status == 1 ? 'Active' : 'Deactive' }}</div>
          </td>
          <td>
           <div class="badge badge-shadow badge-success"> {{$item->category->name}}</div>
          </td>
          <td>
           <a href="{{ route('product.show', ['product' => $item->id]) }}" class="btn btn-primary">View</a>
           <a href="{{ route('product.edit', ['product' => $item->id]) }}" class="btn btn-secondary">Edit</a>

           <form action="{{ route('product.destroy', ['product' => $item->id]) }}" class="d-inline-block" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
           </form>

          </td>
         </tr>
        @endforeach


       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>
@endsection
