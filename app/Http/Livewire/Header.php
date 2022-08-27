<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $search = null;

    public function render()
    {
        return view('livewire.header');
    }

    public function logout()
    {
        Auth::logout();
        return back();
    }
}
