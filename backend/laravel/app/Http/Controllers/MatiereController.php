<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Matiere::all();    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matiere = Matiere::create($request->all());

        return response()->json($matiere, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Matiere $matiere)
    {
        //return Etudiant::find($id);
        return $matiere;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matiere $matiere)
    {
        $matiere->update($request->all());

        return response()->json($matiere, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, Matiere $matiere)
    {
        $matiere->delete();

        return response()->json(null, 204);
    }
}
