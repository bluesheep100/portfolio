<?php

namespace App\Http\Controllers;

use App\Yahtzee;

class YahtzeeController extends Controller
{
    public function create()
    {
        request()->validate(['player_count' => 'integer|min:1|max:6']);

        if (!session()->has('yahtzee'))
            session(['yahtzee' => new Yahtzee(request('player_count'))]);

        return redirect(route('yahtzee'));
    }

    public function destroy()
    {
        session()->forget('yahtzee');

        return redirect(route('yahtzee'));
    }
}
