<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserUpdate extends Component
{ 
    public $idx;
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name'  => 'required|max:255',
        'email' => 'required|max:255',
        'password' => 'required|min:8',
    ];

    public function render()
    { 
        $user = User::where('id',$this->idx)->first();
        $this->name = $user->name;
        $this->email = $user->email;
        
        return view('livewire.user-update', ['user' => $user]);
    }

    

    public function submit()
    {
        $this->validate();

        $user = User::find($this->idx);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->password = '';

        session()->flash('message', 'Usuário Editado com sucesso!.');
    }
    
}
