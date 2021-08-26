<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" wire:ignore.self>
 <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
   </div>
   <form method="GET" wire:submit.prevent="role">
    @csrf
    <div class="modal-body">

     <div class="form-group">
      <label>Role Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.defer="role.name" name="rolename">
      @error('name')
       <div class="invalid-feedback">
        {{ $message }}
       </div>
      @enderror
     </div>
     <div class="form-group">
      <label>Role guarded</label>
      <input readonly type="text" class="form-control" wire:model.defer="role.guard_name" name="guard_name">
     </div>
    </div>
    <div class="modal-footer bg-whitesmoke br">
     <button class="btn btn-primary" id="toastr-2">Save</button>
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
   </form>
  </div>
 </div>
</div>







 {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="formModal">Modal title</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
   </div>
   <div class="modal-body">
    <form method="GET" wire:submit.prevent='role'>
     @csrf
     <div class="modal-body">
      <div class="form-group">
       <label>User</label>
       <select class="form-control selectric" name="user" wire:model.defer='ru.user'>
        <option hidden selected>Select User</option>
        @foreach ($users as $item)

         <option value="{{ $item->id }}"> {{ $item->firstname }} {{ $item->firstname }} : {{ $item->email }} </option>
        @endforeach
       </select>
      </div>
      <div class="form-group">
       <label>Roles</label>
       <select class="form-control selectric" name="role" wire:model.defer='ru.role'>
        <option hidden selected>Select Role</option>
        @foreach ($roles as $item)
         @if ($item->status == 1)
          <option value="{{ $item->id }}">{{ $item->name }}</option>

         @endif
        @endforeach
       </select>
      </div>

      <div class="form-group">
       <label>Model type</label>
       <input readonly type="text" class="form-control" wire:model.defer="ru.mt" name="mt">
      </div>
     </div>

     <div class="modal-footer bg-whitesmoke br">
      <button type="submit" class="btn btn-primary">Save</button>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>
    </form>
   </div>
  </div>
 </div>
</div> --}}
