<?php

namespace App\Http\Livewire;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Traits\ImageUpload;
use Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

use function PHPUnit\Framework\fileExists;
use function PHPUnit\Framework\isNull;

class Show extends Component
{
    use ImageUpload;
    use WithFileUploads;

    public $profile = [];
    public $image;


    public function update()
    {
        // dd($this->profile);
        if (isset($this->profile['phone'])) {

            $this->profile['phone'] = Str::getPhone($this->profile['phone']);
        }

        $data = Validator::make($this->profile, [
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable',
            'image' =>  'nullable|file|image|mimes:jpeg,png,jpg,gif|max:8192'
        ])->validate();

        $OldImg = auth()->user()->image;
        if (isset($data['image']) && $data['image']) {
            if ($OldImg) {
                if (file_exists(storage_path() . '/app/public/profile-photos/' . $OldImg)) {
                    unlink(storage_path() . '/app/public/profile-photos/' . $OldImg);
                }
            }
        }
        if (isset($data['image']) && $data['image']) {
            $data['image'] = time() . '.' . $data['image']->extension();

            $this->profile['image']->storeAs('/public/profile-photos/', $data['image']);
        }



        Auth::user()->update($data);
        $this->profile=[];
        session()->flash('msg', 'profile updated');
        return redirect()->route('profile.show');

        // $data = $this->UserImageUpload($data, $request, '/public/profile-photos/', $user);
    }
    public function mount()
    {
        $this->profile['firstname'] = auth()->user()->firstname;
        $this->profile['lastname'] =auth()->user()->lastname;
        $this->profile['address'] =auth()->user()->address;
        $this->profile['phone'] =str_replace('-', '',auth()->user()->phone );
        $this->profile['email'] =auth()->user()->email;
        // $this->profile['image'] =auth()->user()->image;
    }
    public function render()
    {
        return view('livewire.show');
    }
}
