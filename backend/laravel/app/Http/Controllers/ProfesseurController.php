<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Professeur::all();    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $professeur = Professeur::create($request->all());

        return response()->json($professeur, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur)
    {
        //return Etudiant::find($id);
        return $professeur;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professeur $professeur)
    {
        $professeur->update($request->all());

        return response()->json($professeur, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, Professeur $professeur)
    {
        $professeur->delete();

        return response()->json(null, 204);
    }
}
