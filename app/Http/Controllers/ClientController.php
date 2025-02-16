<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('pages/home');
    }
    public function ShowAbout()
    {
        return view('pages/about');
    }
    public function ShowServices()
    {
        return view('pages/services');
    }
    public function ShowContact()
    {
        return view('pages/contact');
    }
    public function ShowBlog()
    {
        return view('pages/blog');
    }
}
