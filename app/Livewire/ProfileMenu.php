<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileMenu extends Component
{
    public function render()
    {
        return view('livewire.profile-menu');
    }

    public function logout()
    {
        Auth::logout();
 
        session()->invalidate();
    
        session()->regenerateToken();
    
        return redirect('/');
    }
}
