<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class admincontro extends Controller
{
    public function index()
    {
       // $users = User::find($id);
        //return view('admin', ['users' => $users]);
        return view('home');
    }
}