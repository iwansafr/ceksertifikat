<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    #[Title('Login')]
    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $this->validate(['email'=>'required','password'=>'required']);
    }
}
