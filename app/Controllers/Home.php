<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    public function pendidikan()
    {
        return view('pendidikan');
    }
    public function organisasi()
    {
        return view('organisasi');
    }
    public function login()
    {
        return view('login');
    }
    public function fasilitas()
    {
        return view('fasilitas');
    }
}
