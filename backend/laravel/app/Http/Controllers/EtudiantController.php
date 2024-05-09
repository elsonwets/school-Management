<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Etudiant::all();    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etudiant = Etudiant::create($request->all());

        return response()->json($etudiant, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //return Etudiant::find($id);
        return $etudiant;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update($request->all());

        return response()->json($etudiant, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, Etudiant $etudiant)
    {
        $etudiant->delete();

        return response()->json(null, 204);
    }
}
