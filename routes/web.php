<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DomaineInterventionController;
use App\Http\Controllers\Admin\FactoryController;
use App\Http\Controllers\Admin\InterventionController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\TypeInterventionController;
use App\Http\Controllers\Admin\PDFController;
use App\Http\Controllers\auth\AgentController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\auth\SupController;
use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;

// Accueil
Route::view('/', 'welcome')->name('home'); // Page d'accueil
Route::view('/login', 'auth/authentication-login')->name('login'); // Vue de la page de connexion
Route::post('/login', [AuthController::class, 'login'])->name('login.post'); // Connexion

Route::middleware('auth:admin')->group(function () {

    // Tableau de Bord
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard'); // Vue DashBoard
    Route::get('/user', [UserController::class, 'index'])->name('users'); // Vue Utilisateur

    // Gestion Utilisateur

    // Admin
    Route::get('/addadmin', [UserController::class, 'show'])->name('admin.create'); // Vue pour ajouter un admin
    Route::post('/add-admin', [UserController::class, 'store'])->name('admin.store'); // Ajouter un admin
    Route::get('/editadmin/{id}', [UserController::class, 'edit'])->name('admin.edit'); //Afficher Admin
    Route::post('/edit-admin/{id}', [UserController::class, 'update']); //Modifier Admin
    Route::get('/deladmin/{id}', [UserController::class, 'destroy'])->name('admin.delete'); // Supprimer un admin


    // Superviseur
    Route::get('/addsup', [SupController::class, 'index'])->name('sup.create'); // Vue pour ajouter un superviseur
    Route::post('/add-sup', [SupController::class, 'store'])->name('sup.store'); // Ajouter un superviseur
    Route::get('/editsup/{id}', [SupController::class, 'edit'])->name('admin.edit'); //Afficher Sup
    Route::post('/edit-sup/{id}', [SupController::class, 'update']); //Modifier Sup
    Route::get('/delsup/{id}', [SupController::class, 'destroy'])->name('sup.delete'); // Supprimer un superviseur

    // Agent
    Route::get('/addagent', [AgentController::class, 'index'])->name('agent.create'); // Vue pour ajouter un agent
    Route::post('/add-agent', [AgentController::class, 'store'])->name('agent.store'); // Ajouter un agent
    Route::get('/editagent/{id}', [AgentController::class, 'edit'])->name('agent.edit'); //Afficher Agent
    Route::post('/edit-agent/{id}', [AgentController::class, 'update']); //Modifier Agent
    Route::get('/delagent/{id}', [AgentController::class, 'destroy'])->name('agent.delete'); // Supprimer un agent

    // Gestion Intervention

    //Intervention
    Route::get('/inter', [InterventionController::class, 'index'])->name('inter.index');
    Route::get('/addinter', [InterventionController::class, 'create'])->name('inter.create'); // Page d'ajout d'intervention
    Route::post('/add-inter', [InterventionController::class, 'store'])->name('inter.store'); // Méthode d'ajout d'intervention
    Route::get('/editinter/{id}', [InterventionController::class, 'edit'])->name('inter.edit');
    Route::post('/edit-inter/{id}', [InterventionController::class, 'update'])->name('inter.update');
    Route::get('/delinter/{id}', [InterventionController::class, 'destroy'])->name('inter.destroy');

    //Fiche d'Intervention en PDF
    Route::get('/PDF', [PDFController::class, 'PDF']);

    // Type d'intervention
    Route::get('/type-int', [TypeInterventionController::class, 'index'])->name('type_int.index'); // Liste des types d'interventions
    Route::get('/add-type-int', [TypeInterventionController::class, 'create'])->name('type_int.create'); // Page d'ajout de type d'intervention
    Route::post('/add-type-int', [TypeInterventionController::class, 'store'])->name('type_int.store'); // Ajouter un type d'intervention
    Route::get('/edit-type-int/{id}', [TypeInterventionController::class, 'edit'])->name('type_int.edit'); // Modifier un type d'intervention
    Route::post('/edit-type/{id}', [TypeInterventionController::class, 'update'])->name('type_int.update'); // Envoyer modification
    Route::get('/del-type-int/{id}', [TypeInterventionController::class, 'destroy'])->name('type_int.delete'); // Supprimer un type d'intervention

    // Domaine d'intervention
    Route::get('/domain', [DomaineInterventionController::class, 'index'])->name('dom.index'); // Liste des domaines d'interventions
    Route::get('/adddomain', [DomaineInterventionController::class, 'create'])->name('dom.create'); // Page d'ajout de domaine d'intervention
    Route::post('/add-domain', [DomaineInterventionController::class, 'store'])->name('dom.store'); // Ajouter un domaine d'intervention
    Route::get('/editdomain/{id}', [DomaineInterventionController::class, 'edit'])->name('dom.edit'); // Modifier un domaine d'intervention
    Route::post('/edit-domain/{id}', [DomaineInterventionController::class, 'update'])->name('dom.update'); // Envoyer modification
    Route::get('/deldomain/{id}', [DomaineInterventionController::class, 'destroy'])->name('dom.delete'); // Supprimer un domaine d'intervention

    // Gestion Entreprise

    //  Entreprise
    Route::get('/factory', [FactoryController::class, 'index'])->name('factory.index');
    Route::get('/addfactory', [FactoryController::class, 'create'])->name('factory.create');
    Route::post('/add-factory', [FactoryController::class, 'store'])->name('factory.store');
    Route::get('/editfactory/{id}', [FactoryController::class, 'edit'])->name('factory.edit');
    Route::post('/edit-factory/{id}', [FactoryController::class, 'update'])->name('factory.update');
    Route::get('/delfactory/{id}', [FactoryController::class, 'destroy'])->name('factory.destroy');

    // Profil
    Route::get('/profil', [ProfilController::class, 'index'])->name('profile.index'); // Page de Profil

    // Déconnexion
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); // Déconnexion
});
