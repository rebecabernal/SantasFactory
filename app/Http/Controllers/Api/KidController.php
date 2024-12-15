<?php

namespace App\Http\Controllers\Api;

use App\Models\Kid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kids = Kid::all();
        return response()->json($kids, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
/*     public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kid = Kid::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'behaviour' => $request->behaviour,
        ]);
        $kid->save();

        return response()->json($kid, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kid = Kid::find($id);

        return response()->json($kid, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
/*     public function edit(string $id)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kid = Kid::find($id);
        $kid ->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'behaviour' => $request->behaviour,
        ]);

        $kid -> save();

        return response()->json($kid, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kid = Kid::find($id);
        $kid -> delete();
    }
}
