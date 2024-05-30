<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Validate('required|email|max:45|exists:users,email')]
    public $email;

    #[Validate('required|min:8|max:45')]
    public $password;

    public function authenticate() {
        $this->validate();

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->addError('email', 'The provided credentials are incorrect.');
            return;
        }

        if(Auth()->attempt(['email' => $this->email, 'password' => $this->password], true)) {

            request()->session()->regenerate();

            return redirect()->to('/dashboard');
        } else {
            $this->addError('email', 'The provided credentials are incorrect.');
        }
 
    }

    public function render()
    {
        return view('livewire.login');
    }
}
