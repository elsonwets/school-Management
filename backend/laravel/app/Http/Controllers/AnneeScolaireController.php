<?php

namespace App\Http\Controllers;

use App\Models\Annee_scolaire;
use Illuminate\Http\Request;

class AnneeScolaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Annee_scolaire::all();    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $annee = Annee_scolaire::create($request->all());

        return response()->json($annee, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Annee_scolaire $annee)
    {
        //return Etudiant::find($id);
        return $annee;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annee_scolaire $annee)
    {
        $annee->update($request->all());

        return response()->json($annee, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, Annee_scolaire $annee)
    {
        $annee->delete();

        return response()->json(null, 204);
    }
}
