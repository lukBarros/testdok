<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';    

    public function render()
    {
        return view('livewire.user-list', 
        [
            'users' => User::paginate(2),
        ]);
    }
}
