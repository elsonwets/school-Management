<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inscription::all();    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inscription = Inscription::create($request->all());

        return response()->json($inscription, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //return Etudiant::find($id);
        return $inscription;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        $inscription->update($request->all());

        return response()->json($inscription, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, Inscription $inscription)
    {
        $inscription->delete();

        return response()->json(null, 204);
    }
}
