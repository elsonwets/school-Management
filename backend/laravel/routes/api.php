<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\TuteurController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\DocumentAcademiqueController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\AnneeScolaireController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

//Route Etudiant
Route::get('etudiants', [EtudiantController::class,'index']);
Route::get('etudiants/{etudiant}', [EtudiantController::class,'show']);
Route::post('etudiants', [EtudiantController::class,'store']);
Route::put('etudiants/{etudiant}', [EtudiantController::class,'update']);
Route::delete('etudiants/{etudiant}', [EtudiantController::class,'delete']);


//Route Professeur
Route::get('etudiants', [ProfesseurController::class,'index']);
Route::get('etudiants/{etudiant}', [ProfesseurController::class,'show']);
Route::post('etudiants', [ProfesseurController::class,'store']);
Route::put('etudiants/{etudiant}', [ProfesseurController::class,'update']);
Route::delete('etudiants/{etudiant}', [ProfesseurController::class,'delete']);

//Route Tuteur
Route::get('etudiants', [TuteurController::class,'index']);
Route::get('etudiants/{etudiant}', [ProfesseurController::class,'show']);
Route::post('etudiants', [ProfesseurController::class,'store']);
Route::put('etudiants/{etudiant}', [ProfesseurController::class,'update']);
Route::delete('etudiants/{etudiant}', [ProfesseurController::class,'delete']);

//Route Inscription
Route::get('etudiants', [InscriptionController::class,'index']);
Route::get('etudiants/{etudiant}', [InscriptionController::class,'show']);
Route::post('etudiants', [InscriptionController::class,'store']);
Route::put('etudiants/{etudiant}', [InscriptionController::class,'update']);
Route::delete('etudiants/{etudiant}', [InscriptionController::class,'delete']);

//Route Matiere
Route::get('etudiants', [MatiereController::class,'index']);
Route::get('etudiants/{etudiant}', [MatiereController::class,'show']);
Route::post('etudiants', [MatiereController::class,'store']);
Route::put('etudiants/{etudiant}', [MatiereController::class,'update']);
Route::delete('etudiants/{etudiant}', [MatiereController::class,'delete']);

//Route Message
Route::get('etudiants', [MessageController::class,'index']);
Route::get('etudiants/{etudiant}', [MessageController::class,'show']);
Route::post('etudiants', [MessageController::class,'store']);
Route::put('etudiants/{etudiant}', [MessageController::class,'update']);
Route::delete('etudiants/{etudiant}', [MessageController::class,'delete']);

//Route Note
Route::get('etudiants', [NoteController::class,'index']);
Route::get('etudiants/{etudiant}', [NoteController::class,'show']);
Route::post('etudiants', [NoteController::class,'store']);
Route::put('etudiants/{etudiant}', [NoteController::class,'update']);
Route::delete('etudiants/{etudiant}', [NoteController::class,'delete']);

//Route Paiement
Route::get('etudiants', [PaiementController::class,'index']);
Route::get('etudiants/{etudiant}', [PaiementController::class,'show']);
Route::post('etudiants', [PaiementController::class,'store']);
Route::put('etudiants/{etudiant}', [PaiementController::class,'update']);
Route::delete('etudiants/{etudiant}', [PaiementController::class,'delete']);

// Route Document Academique
Route::get('etudiants', [DocumentAcademiqueController::class,'index']);
Route::get('etudiants/{etudiant}', [DocumentAcademiqueController::class,'show']);
Route::post('etudiants', [DocumentAcademiqueController::class,'store']);
Route::put('etudiants/{etudiant}', [DocumentAcademiqueController::class,'update']);
Route::delete('etudiants/{etudiant}', [DocumentAcademiqueController::class,'delete']);

//Route Classe
Route::get('etudiants', [ClasseController::class,'index']);
Route::get('etudiants/{etudiant}', [ClasseController::class,'show']);
Route::post('etudiants', [ClasseController::class,'store']);
Route::put('etudiants/{etudiant}', [ClasseController::class,'update']);
Route::delete('etudiants/{etudiant}', [ClasseController::class,'delete']);

//Route Annee Scolaire
Route::get('etudiants', [AnneeScolaireController::class,'index']);
Route::get('etudiants/{etudiant}', [AnneeScolaireController::class,'show']);
Route::post('etudiants', [AnneeScolaireController::class,'store']);
Route::put('etudiants/{etudiant}', [AnneeScolaireController::class,'update']);
Route::delete('etudiants/{etudiant}', [AnneeScolaireController::class,'delete']);