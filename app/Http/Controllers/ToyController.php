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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
