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
Route::get('professeurs', [ProfesseurController::class,'index']);
Route::get('professeurs/{professeur}', [ProfesseurController::class,'show']);
Route::post('professeurs', [ProfesseurController::class,'store']);
Route::put('professeurs/{professeur}', [ProfesseurController::class,'update']);
Route::delete('professeurs/{professeur}', [ProfesseurController::class,'delete']);

//Route Tuteur
Route::get('tuteurs', [TuteurController::class,'index']);
Route::get('tuteurs/{tuteur}', [ProfesseurController::class,'show']);
Route::post('tuteurs', [ProfesseurController::class,'store']);
Route::put('tuteurs/{tuteur}', [ProfesseurController::class,'update']);
Route::delete('tuteurs/{tuteur}', [ProfesseurController::class,'delete']);

//Route Inscription
Route::get('Inscriptions', [InscriptionController::class,'index']);
Route::get('Inscriptions/{inscription}', [InscriptionController::class,'show']);
Route::post('Inscriptions', [InscriptionController::class,'store']);
Route::put('Inscriptions/{inscription}', [InscriptionController::class,'update']);
Route::delete('Inscriptions/{inscription}', [InscriptionController::class,'delete']);

//Route Matiere
Route::get('matieres', [MatiereController::class,'index']);
Route::get('matieres/{etudiant}', [MatiereController::class,'show']);
Route::post('matieres', [MatiereController::class,'store']);
Route::put('matieres/{matiere}', [MatiereController::class,'update']);
Route::delete('matieres/{matiere}', [MatiereController::class,'delete']);

//Route Message
Route::get('messages', [MessageController::class,'index']);
Route::get('messages/{message}', [MessageController::class,'show']);
Route::post('messages', [MessageController::class,'store']);
Route::put('messages/{message}', [MessageController::class,'update']);
Route::delete('messages/{message}', [MessageController::class,'delete']);

//Route Note
Route::get('notes', [NoteController::class,'index']);
Route::get('notes/{note}', [NoteController::class,'show']);
Route::post('notes', [NoteController::class,'store']);
Route::put('notes/{note}', [NoteController::class,'update']);
Route::delete('notes/{note}', [NoteController::class,'delete']);

//Route Paiement
Route::get('paiements', [PaiementController::class,'index']);
Route::get('paiements/{paiement}', [PaiementController::class,'show']);
Route::post('paiements', [PaiementController::class,'store']);
Route::put('paiements/{paiement}', [PaiementController::class,'update']);
Route::delete('paiements/{paiement}', [PaiementController::class,'delete']);

// Route Document Academique
Route::get('documents', [DocumentAcademiqueController::class,'index']);
Route::get('documents/{document}', [DocumentAcademiqueController::class,'show']);
Route::post('documents', [DocumentAcademiqueController::class,'store']);
Route::put('documents/{document}', [DocumentAcademiqueController::class,'update']);
Route::delete('documents/{document}', [DocumentAcademiqueController::class,'delete']);

//Route Classe
Route::get('classes', [ClasseController::class,'index']);
Route::get('classes/{classe}', [ClasseController::class,'show']);
Route::post('classes', [ClasseController::class,'store']);
Route::put('classes/{classe}', [ClasseController::class,'update']);
Route::delete('classes/{classe}', [ClasseController::class,'delete']);

//Route Annee Scolaire
Route::get('annees', [AnneeScolaireController::class,'index']);
Route::get('annees/{annee}', [AnneeScolaireController::class,'show']);
Route::post('annees', [AnneeScolaireController::class,'store']);
Route::put('annees/{annee}', [AnneeScolaireController::class,'update']);
Route::delete('annees/{annee}', [AnneeScolaireController::class,'delete']);