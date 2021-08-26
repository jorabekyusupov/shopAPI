

<form method="GET" wire:submit.prevent="update" enctype="multipart/form-data">

 <div class="card-header">
  <h4>Edit Profile</h4>
 </div>
 <div class="card-body">
  <div class="row">
   <div class="form-group col-md-12 col-12">
    <label class="">Image</label>

    <div id="image-preview {{ $errors->first('image') ? 'is-invalid' : ' ' }}" class="image-preview ">
     <label for="image-upload" id="image-label">Choose File</label>
     <input type="file" name="image" class="{{ $errors->first('image') ? 'is-invalid' : ' ' }}" id="image-upload" wire:model.defer="profile.image" />
     @error('image')
      <div class="invalid-feedback">
       {{ $message }}
      </div>

     @enderror

    </div>
   </div>
   <div class="form-group col-md-6 col-12">
    <label>First Name</label>

    <input type="text" class="form-control {{ $errors->first('firstname') ? 'is-invalid' : ' ' }}" name="firstname" wire:model.defer="profile.firstname">
    @error('firstname')
     <div class="invalid-feedback">
      {{ $message }}
     </div>

    @enderror

   </div>
   <div class="form-group col-md-6 col-12">
    <label>Last Name</label>
    <input type="text" class="form-control {{ $errors->first('lastname') ? 'is-invalid' : ' ' }}" name="lastname" wire:model.defer="profile.lastname">


    <div class="invalid-feedback">
     {{ $errors->first('lastname') }}
    </div>


   </div>
   <div class="form-group col-md-6 col-12">
    <label>address</label>
    <input type="text" class="form-control {{ $errors->first('address') ? 'is-invalid' : ' ' }}" name="address" wire:model.defer="profile.address">
    @error('address')
     <div class="invalid-feedback">
      {{ $errors->first('address') }}
     </div>

    @enderror
   </div>
   <div class="form-group col-md-6 col-12">
    <label>Email</label>
    <input type="email" class="form-control {{ $errors->first('email') ? 'is-invalid' : ' ' }}" name="email" wire:model.defer="profile.email">
    @error('email')
     <div class="invalid-feedback">
      {{ $errors->first('email') }}
     </div>

    @enderror

   </div>
  </div>
  <div class="row">
   <div class="form-group col-md-5 col-12">
    <label>Phone</label>
    <input type="tel" class="form-control {{ $errors->first('phone') ? 'is-invalid' : ' ' }}" name="phone" wire:model.defer="profile.phone">
    <div class="invalid-feedback">

     <span>{{ $errors->first('phone') }}</span>
    </div>
   </div>
  </div>






  <div class="text-right card-footer">
   <button class="btn btn-primary" type="">Save Changes</button>
  </div>
</form>
