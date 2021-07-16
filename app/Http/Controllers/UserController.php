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
     * Listing users
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.create');
    }
}