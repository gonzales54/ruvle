<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $post)
    {
        \Auth::user()->favorite($post);
        return back();
    }
    
    public function destroy($post)
    {
        \Auth::user()->unfavorite($post);
        return back();
    }
}
