<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function show()
    {
        return view('pages/authors');
    }
}
