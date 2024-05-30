<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    #[Validate('required|max:45')]
    public $name;

    #[Validate('required|email|max:45')]
    public $email;

    #[Validate('required|min:8|max:45')]
    public $password;

    #[Validate('required|same:password')]
    public $password_confirmation;

    public function register()
    {
        $this->validate();

        DB::beginTransaction();

        try {            
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            DB::commit();

            return redirect()->to('/login');

        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }

    public function render()
    {
        return view('livewire.register');
    }
}
