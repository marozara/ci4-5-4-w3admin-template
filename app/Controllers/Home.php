<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        
        return view('index');
    }


    public function icons(): string
    {
        
        return view('icons');
    }


    public function forms(): string
    {
        
        return view('forms');
    }

    public function login(): string
    {
        
        return view('login');
    }

    public function profile(): string
    {
        
        return view('profile');
    }

    public function register(): string
    {
        
        return view('register');
    }

    public function tables(): string
    {
        
        return view('tables');
    }


}
