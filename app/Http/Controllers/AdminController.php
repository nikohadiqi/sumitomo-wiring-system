<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function checkpoint()
    {
        return view('admin.checkpoint');
    }
    public function operator()
    {
        return view('admin.operator');
    }
    public function robot()
    {
        return view('admin.robot');
    }
    public function create()
    {
        return view('admin.create');
    }
    public function operator1()
    {
        return view('operator.operator');
    }

}
