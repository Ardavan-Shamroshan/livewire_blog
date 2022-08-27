<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $data = [
        'email' => '',
        'password' => '',
        'remember' => false,
    ];

    protected $validationAttributes = [
        'data.email' => 'ایمیل',
        'data.password' => 'کلمه عبور',
        'data.remember' => 'مرا بخاطر بسپار',
    ];

    public function login()
    {
        $this->validate([
            'data.email' => ['required', 'email'],
            'data.password' => ['required', 'string', 'min:8'],
        ]);
        if (Auth::attempt([
            'email' => $this->data['email'],
            'password' => $this->data['password'],

        ], $this->data['remember'])) {
            return redirect()->route('blog');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
