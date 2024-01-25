<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public $successRedirect = false;

    #[Title('Login')]
    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $this->validate(['email'=>'required','password'=>'required']);

        if(Auth::attempt(['email'=>$this->email,'password'=>$this->password],true)){
            $this->successRedirect = true;
            // sleep(1);
            return redirect('/admin');
        }else{
            return session()->flash('message','Email or Password is invalid');
        }
    }
}
