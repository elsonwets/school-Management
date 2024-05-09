<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Paiement::all();    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paiement = Paiement::create($request->all());

        return response()->json($paiement, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paiement $paiement)
    {
        //return Etudiant::find($id);
        return $paiement;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paiement $paiement)
    {
        $paiement->update($request->all());

        return response()->json($paiement, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, Paiement $paiement)
    {
        $paiement->delete();

        return response()->json(null, 204);
    }
}
