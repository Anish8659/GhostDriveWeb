<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageControllers extends Controller
{
 
    public function index()
 
    {
 
        return view('welcome');
 
    }
 
    public function about()
 
    {
 
        return view('about');
 
    }
 
    public function devices()
 
    {
 
        return view('devices');
 
    }
 
    public function FAQ()
 
    {
 
        return view('FAQ');
 
    }
 
    public function login()
 
    {
 
        return view('login');
 
    }
}
