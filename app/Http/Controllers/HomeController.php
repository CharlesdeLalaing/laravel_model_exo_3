<?php

namespace App\Http\Controllers;

use App\Models\Homevariable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $peoples = Homevariable::all();
        $count = count($peoples);
        return view('welcome', compact('peoples', 'count'));
    }
}
