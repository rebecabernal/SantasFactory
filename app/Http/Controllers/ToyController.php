<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;

class ToyController extends Controller
{
    public function index()
    {
        $toys = Toy::all();

        return view('toys', compact('toys'));
    }
}
