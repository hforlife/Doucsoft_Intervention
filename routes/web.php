<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\RapportController;
use App\Http\Controllers\Admin\TypeInterventionController;
use App\Http\Controllers\auth\AgentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\auth\SupController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\VueController;
use Illuminate\Support\Facades\Route;

// Accueil
Route::view('/', 'welcome')->name('home'); // Page d'accueil
Route::view('/login', 'auth/authentication-login')->name('login'); // Vue de la page de connexion
Route::post('/login', [AuthController::class, 'login'])->name('login.post'); // Connexion



// Tableau de Bord
Route::get('/home-admin', [DashboardController::class, 'index'])->name('admin.dashboard'); // Vue DashBoard
Route::get('/user', [UserController::class, 'index'])->name('admin.users'); // Liste des utilisateurs

// Type d'intervention
Route::get('/type-int-admin', [TypeInterventionController::class, 'index'])->name('admin.type_intervention.index'); // Liste des types d'interventions
Route::get('/add-type-int-admin', [VueController::class, 'typeintaddview'])->name('admin.type_intervention.create'); // Page d'ajout de type d'intervention
Route::post('/add-type-send-admin', [TypeInterventionController::class, 'store'])->name('admin.type_intervention.store'); // Ajouter un type d'intervention
Route::get('/edit-type-int-admin/{id}', [TypeInterventionController::class, 'edit'])->name('admin.type_intervention.edit'); // Modifier un type d'intervention
Route::post('/edit-type-send-admin/{id}', [TypeInterventionController::class, 'update'])->name('admin.type_intervention.update'); // Envoyer modification
Route::get('/del-type-int-admin/{id}', [TypeInterventionController::class, 'destroy'])->name('admin.type_intervention.delete'); // Supprimer un type d'intervention

// Gestion Utilisateur

// Admin
Route::get('/addadmin', [UserController::class, 'show'])->name('admin.create'); // Vue pour ajouter un admin
Route::post('/add-admin', [UserController::class, 'store'])->name('admin.store'); // Ajouter un admin
Route::get('/edit-admin/{id}', [UserController::class, 'edit'])->name('admin.edit'); //Afficher Admin
Route::post('/edit-admin-post/{id}', [UserController::class, 'update']); //Modifier Admin
Route::get('/admin-del/{id}', [UserController::class, 'destroy'])->name('admin.delete'); // Supprimer un admin

// Agent
Route::get('/addagent', [AgentController::class, 'index'])->name('agent.create'); // Vue pour ajouter un agent
Route::post('/add-agent', [AgentController::class, 'store'])->name('agent.store'); // Ajouter un agent
Route::get('/edit-agent/{id}', [AgentController::class, 'edit'])->name('agent.edit'); //Afficher Agent
Route::post('/edit-agent-post/{id}', [AgentController::class, 'update']); //Modifier Agent
Route::get('/agent-del/{id}', [AgentController::class, 'destroy'])->name('agent.delete'); // Supprimer un agent

// Sup
Route::get('/addsup', [SupController::class, 'index'])->name('sup.create'); // Vue pour ajouter un superviseur
Route::post('/add-sup', [SupController::class, 'store'])->name('sup.store'); // Ajouter un superviseur
Route::get('/edit-sup/{id}', [SupController::class, 'edit'])->name('admin.edit'); //Afficher Sup
Route::post('/edit-sup-post/{id}', [SupController::class, 'update']); //Modifier Sup
Route::get('/sup-del/{id}', [SupController::class, 'destroy'])->name('sup.delete'); // Supprimer un superviseur

//Rapport
Route::get('/feedback', [DashboardController::class, 'feedback'])->name('admin.feedback.index');
Route::get('/addfeedback', [VueController::class, 'addfeedback'])->name('admin.feedback.create');
Route::post('/add-feedback', [RapportController::class, 'store'])->name('admin.feedback.store');

//Intervention
Route::get('/inter', [DashboardController::class, 'intervention'])->name('admin.inter.index');
Route::get('/add-inter', [VueController::class, 'addint'])->name('admin.inter.store'); // Page d'ajout de type d'intervention

// Profil
Route::get('/profil', [ProfilController::class, 'index'])->name('profile'); // Déconnexion

// Déconnexion
Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); // Déconnexion



