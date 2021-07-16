<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

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
        return view('user.update', ['id' => $id]);
    }
}