<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Classe::all();    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $classe = Classe::create($request->all());

        return response()->json($classe, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Classe $classe)
    {
        //return Etudiant::find($id);
        return $classe;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classe $classe)
    {
        $classe->update($request->all());

        return response()->json($classe, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, Classe $classe)
    {
        $classe->delete();

        return response()->json(null, 204);
    }
}
