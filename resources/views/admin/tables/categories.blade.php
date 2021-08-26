@extends('layouts.dash')
@section('content')

 <div class="row">
  <div class="col-12">
   <div class="card">
    <div class="card-header">
     <h4>Categories | <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a></h4>
    </div>
    <div class="card-body">
     <div class="table-responsive">
      <table class="table table-striped" id="table-1">
       <thead>
        <tr>
         <th class="text-center">
          #
         </th>
         <th>Name</th>
         <th>image</th>
         <th>Status</th>
         <th>Details</th>

        </tr>
       </thead>
       <tbody>
        @foreach ($category as $item)
         <tr>
          <td>
           {{$item->id}}
          </td>
          <td> {{$item->name}}</td>

          <td>
           <img alt="image" src="{{asset('storage/category-images/' . $item->image)}}" width="35">
          </td>

          <td>
            <div class="badge badge-shadow {{ $item->status == 1 ? 'badge-success' : 'badge-danger' }}"> {{ $item->status == 1 ? 'Active' : 'Deactive' }}</div>
           </td>
           <td>
            <a href="{{ route('category.show', ['category' => $item->id]) }}" class="btn btn-primary">View</a>
            <a href="{{ route('category.edit', ['category' => $item->id]) }}" class="btn btn-secondary">Edit</a>

            <form action="{{ route('category.destroy', ['category' => $item->id]) }}" class="d-inline-block" method="POST">
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
