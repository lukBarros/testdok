<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Listing users
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Create users
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.create');
    }


    /**
     * Create users
     *
     * @return \Illuminate\View\View
     */
    public function update($id)
    {
        if(!Auth::check() ||  Auth()->user()->id != $id)
        {
            session()->flash('message', 'Não é possível editar esse usuário!');
            return Redirect::to('/');
        }

        return view('user.update', ['id' => $id]);
    }
}