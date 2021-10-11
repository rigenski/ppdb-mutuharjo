<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function index()
    {
        return view('/pages/masuk');
    }
}
