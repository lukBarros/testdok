<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name'  => 'required|max:255',
        'email' => 'required|max:255|unique:users',
        'password' => 'required|min:8',
    ];

    public function render()
    {
        return view('livewire.user-create');
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->name = '';
        $this->email = '';
        $this->password = '';
        

        session()->flash('message', 'Usuário Criado com sucesso!.');
    }
}
