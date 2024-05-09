<?php

namespace App\Http\Controllers;

use App\Models\Tuteur;
use Illuminate\Http\Request;

class TuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tuteur::all();    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tuteur = Tuteur::create($request->all());

        return response()->json($tuteur, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tuteur $tuteur)
    {
        //return Etudiant::find($id);
        return $tuteur;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tuteur $tuteur)
    {
        $tuteur->update($request->all());

        return response()->json($tuteur, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, Tuteur $tuteur)
    {
        $tuteur->delete();

        return response()->json(null, 204);
    }
}
