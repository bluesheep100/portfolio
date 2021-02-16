<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function portfolio()
    {
        return view('portfolio');
    }

    public function rubiksCube()
    {
        return view('rubiks_cube');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function mvcLite()
    {
        return view('mvc_lite');
    }

    public function yahtzee()
    {
        return view('yahtzee');
    }
}
