<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function show($slug)
    {
        return view('page', ['slug' => $slug]);
    }
}
