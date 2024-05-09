<?php

namespace App\Http\Controllers;

use App\Models\Document_academique;
use Illuminate\Http\Request;

class DocumentAcademiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Document_academique::all();    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $document = Document_academique::create($request->all());

        return response()->json($document, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Document_academique $document)
    {
        //return Etudiant::find($id);
        return $document;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document_academique $document)
    {
        $document->update($request->all());

        return response()->json($document, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request, Document_academique $document)
    {
        $document->delete();

        return response()->json(null, 204);
    }
}
