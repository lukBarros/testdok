<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';    

    public function render($view = 'livewire.user-list')
    {
        return view($view, 
        [
            'users' => User::paginate(5),
        ]);
    }

    public function buttonCreate()
    {
        return $this->redirect('/create');
    }

    public function buttonUpdate($id)
    {
        return $this->redirect('/update/'.$id);
    }

    public function buttonDelete($id)
    {
        if($id){
            User::where('id',$id)->delete();
            session()->flash('message', 'Usuário deletado com sucesso!');
        }
    }
}
