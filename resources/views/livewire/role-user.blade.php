<div class="card">
 <div class="card-header">
  <h4>Bordered Tab</h4>
 </div>
 <div class="card-body">
  <ul class="nav nav-tabs" id="myTab2" role="tablist">
   <li class="nav-item">
    <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Role</a>
   </li>
   <li class="nav-item">
    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">User with Role</a>
   </li>

  </ul>
  <div class="tab-content tab-bordered" id="myTab3Content">
   <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">
    <div class="card">
     <div class="card-header">
      <h4>Role | <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Vertically
        Centered</button> </h4>
     </div>
     <div class="card-body">
      <div class="table-responsive">
       <table class="table table-bordered table-md">
        <tr>
         <th>#</th>
         <th>Name</th>
         <th>Status</th>
         <th>Action</th>
        </tr>
        @foreach ($role as $item)


         <tr>
          <td> {{ $item->id }}</td>
          <td>{{ $item->name }}</td>
          <td>
           <div class="badge badge-shadow {{ $item->status == 1 ? 'badge-success' : 'badge-danger' }}"> {{ $item->status == 1 ? 'Active' : 'Deactive' }}</div>
          </td>

          <td>
           <a wire:click="role_active({{ $item->id }})" class="btn {{ $item->status == 1 ? 'btn-danger' : 'btn-success' }}">{{ $item->status == 1 ? 'Deactive' : 'Active' }}</a>
          </td>
         </tr>

        @endforeach

       </table>
      </div>
     </div>

    </div>
   </div>
   <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
    <div class="card">
     <div class="card-header">
      <h4>Role With user | <a href="{{ route('RoleUser.create') }}" class="btn btn-primary">add Role</a></h4>
     </div>
     <div class="card-body">
      <div class="table-responsive">
       <table class="table table-bordered table-md">
        <tr>
         <th>Role</th>
         <th>User</th>

        </tr>


        @foreach ($userRole as $item)

         <tr>
        <td>{{ $item->role->name }}</td>
        <td>{{ $item->user->email }}</td>
         </tr>
        @endforeach

       </table>
      </div>
     </div>

    </div>
   </div>

  </div>
 </div>
</div>
