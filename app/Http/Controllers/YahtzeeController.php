<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YahtzeeController extends Controller
{
    public function create()
    {
        if (!session()->has('yahtzee'))
            session(['yahtzee' => 'yachtzee']);

        return redirect(route('yahtzee'));
    }
}
