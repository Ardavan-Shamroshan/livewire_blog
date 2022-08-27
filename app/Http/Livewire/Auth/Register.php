<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $data = [
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
        'policy' => false
    ];

    protected $validationAttributes = [
        'data.email' => 'ایمیل',
        'data.password' => 'کلمه عبور',
        'data.policy' => 'قوانین و مقررات',
    ];

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register()
    {
        $this->validate([
            'data.email' => ['required', Rule::unique('users', 'email')->ignore(Auth::id())],
            'data.password' => ['required', 'string', 'min:8', 'confirmed'],
            'data.policy' => 'required',
        ]);

        $user = new User;
        $user->email = $this->data['email'];
        $user->password = Hash::make($this->data['password']);
        $user->role = 'user';
        $user->is_admin = 0;
        $user->gender = 1;
        $user->news = 1;
        $user->save();
        $userId = $user->id;
        Auth::loginUsingId($userId);
        return redirect()->route('blog');
    }
}
