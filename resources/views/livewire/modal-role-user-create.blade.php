<div class="card">
 <div class="card-header">
  <h4>Select</h4>
 </div>
 <form wire:submit.prevent='store'>
  <div class="card-body">
   <div class="mt-0 section-title">Default</div>
   <div class="form-group">
    <label>Users</label>
    @if (isset($users))
     <select class="form-control" wire:model='ru.model_id'>
      <option hidden selected>Select User</option>

      @foreach ($users as $item)
       <option value="{{ $item->id }}"> {{ $item->firstname }} {{ $item->lastname }} : {{ $item->email }} </option>

      @endforeach


     </select>
    @else
     <span style="color: red">users were not found or did not connection the database </span>
    @endif
   </div>
   @if (isset($roles))
    <div class="form-group">
     <label>Roles</label>
     <select class="form-control" wire:model='ru.role_id'>
        <option hidden selected>Select Role</option>

        @foreach ($roles as $item)
        @if ($item->status == 1)

        <option value="{{ $item->id }}"> {{ $item->name }}</option>
        @else


        @endif

        @endforeach


       </select>

    </div>
    @else
    <span style="color: red">roles were not found or did not connection the database </span>
   @endif


   <div hidden class="form-group">
  <input hidden readonly type="text" class="form-control" wire:model.defer='ru.model_type'>
   </div>


   <div class="form-group">
    <button type="submit" class="btn btn-primary">save</button>
   </div>

  </div>
 </form>
</div>
