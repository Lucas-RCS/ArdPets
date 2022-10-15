<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('User.index');
    }

    public function create() {
        return view('User.create');
    }
}
