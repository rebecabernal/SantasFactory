<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->action === 'delete'){
            $this->destroy($request->id);
            
            return Redirect::to(route('kidshome'));
        }

        $kids = Kid::get();
        return view('kids', compact('kids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createKidForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kids = Kid::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'behaviour' => $request->behaviour,
        ]);
        $kids->save();

        return Redirect::to(route('kidshome'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kids = Kid::find($id);

        return view('showKid', compact('kids'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kids = Kid::find($id);

        return view('editKidForm', compact('kids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kids = Kid::find($id);

        $kids -> update([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'behaviour' => $request->behaviour,
        ]);

        $kids -> save();
        return Redirect::to('kidshome');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kids = Kid::find($id);

        $kids -> delete();
    }
}
