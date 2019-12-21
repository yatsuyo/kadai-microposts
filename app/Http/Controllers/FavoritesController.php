<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $micropost_id)
    {
        \Auth::user()->favorite($micropost_id);
        return back();
    }

    public function destroy($micropost_id)
    {
        \Auth::user()->unfavorite($micropost_id);
        return back();
    }
}
