<?php
use App\Http\Controllers\CrudController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

// Accueil
Route::view('/', 'welcome'); // Page d'ouverture
Route::view('format', 'home/formation'); // Affiche l'ensemble des formations
Route::view('about', 'home/about'); // Affiche la page à propos
Route::view('index', 'home/index'); // Affiche la page d'accueil

Route::get('article_list', [HomeController::class, 'lister_article']);
Route::get('article', [EtudiantController::class, 'add']);
Route::get('format', [HomeController::class, 'lister_format']);
Route::get('article/{id}', [HomeController::class, 'article']);

// Include Route pour l'accueil
Route::view('header', 'home/include/header');
Route::view('footer', 'home/include/footer');

// Vue des pages d'Authentification
Route::view('register', 'pages/register');
Route::view('login', 'pages/login');

// Méthode des pages d'Authentification
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::get('sign_out', [RegisterController::class, 'sign_out']);
Route::get('getA', [RegisterController::class, 'getA']);

// Route pour l'adhérent
Route::group(['middleware' => ['role:adherent']], function () {
    // Gestion du Profil
    Route::view('profil', 'pages/profil');
    Route::view('edit', 'pages/update-profil');
});

// Route pour le formateur (avec le middleware role:formateur)
// Route::group(['middleware' => ['role:formateur']], function () {
Route::view('formateur', 'Formateur/formateur');
Route::view('f-dashboard', 'Formateur/include/dashboard');
Route::view('f-formation', 'Formateur/form-form');
Route::view('f-progression', 'Formateur/form-prog');
Route::view('f-certificat', 'Formateur/form-cert');
Route::view('f-etudiant', 'Formateur/form-etd');
// });

// Route pour l'admin (avec le middleware role:admin)
// Route::group(['middleware' => ['role:admin']], function () {
// Vue des différentes fonctionnalités de l'admin
Route::view('admin', 'Admin/admin'); // Route pour l'admin
Route::view('a-dashboard', 'Admin/include/dashboard'); // Vue pour le tableau de bord
Route::view('a-progression', 'Admin/admin-prog'); // Vue pour la progression
Route::view('a-formation', 'Admin/admin-form'); // Vue pour les formations
Route::view('a-formateur', 'Admin/admin-f'); // Vue pour les utilisateurs
Route::view('a-certificat', 'Admin/admin-cert'); // Vue pour les certifications

// Méthodes utilisées chez l'administrateur
Route::get('admin', [DashboardController::class, 'total_formation']); // Affiche le total des éléments de la BD
Route::get('a-formation', [FormationController::class, 'lister_Formation']); // Affiche l'ensemble des formations
Route::get('a-etudiant', [EtudiantController::class, 'list']); // Affiche l'ensemble des adhérents
Route::get('a-formateur', [CrudController::class, 'lister_formateur']); // Affiche l'ensemble des formateurs et admins

// Vue pour la gestion des opérations
Route::view('add-formateur', 'Admin/fonction/add-formateur'); // Ajout de formateur
Route::view('upd-formateur', 'Admin/fonction/update-formateur'); // Mise à jour de formateur
Route::view('upd-formation', 'Admin/fonction/update-formation'); // Mise à jour de formation

// Opérations de gestion des formations
Route::get('add-formation', [FormationController::class, 'create']);
Route::post('add-formation', [FormationController::class, 'ajouter_formation']);
Route::get('delete-formation/{id}', [FormationController::class, 'supprimer_formation']);
Route::get('update-formation/{id}', [FormationController::class, 'modifier_formation']);
Route::post('update-traitement_formation', [FormationController::class, 'modifier_formation_traitement']);

// Opérations de gestion des utilisateurs
Route::post('add-formateur', [CrudController::class, 'ajouter_formateur']);
Route::get('delete-formateur/{id}', [CrudController::class, 'supprimer_formateur']);
Route::get('update-formateur/{id}', [CrudController::class, 'modifier_formateur']);
Route::post('update-traitement', [CrudController::class, 'modifier_formateur_traitement']);
// });