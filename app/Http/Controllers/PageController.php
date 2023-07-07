<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function cv(): View
    {
        return view('cv');
    }

    public function bionic(): View
    {
        return view('bionic_reader');
    }
}
