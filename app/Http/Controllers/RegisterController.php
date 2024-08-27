<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class RegisterController extends Controller
{
    // Inscription
    public function register(Request $request)
    {
        // Validation des champs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8', // Ajout de la confirmation du mot de passe
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hashage du mot de passe
        ]);

        // Attribution du rôle à l'utilisateur (par défaut "adherent")
        $user->assignRole('adherent');

        // Connexion automatique après l'inscription
        Auth::login($user);

        // Régénération de la session
        $request->session()->regenerate();

        // Redirection après l'inscription en fonction du rôle
        return redirect()->intended('profil'); // Redirige l'adhérent vers son profil
    }

    // Connexion
    public function login(Request $request)
    {
        // Validation des champs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Tentative d'authentification
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Régénération de la session
            $request->session()->regenerate();

            // Récupération du rôle de l'utilisateur
            $user = Auth::user();

            // Redirection en fonction du rôle
            if ($user->hasRole('admin')) {
                return redirect()->intended('admin'); // Redirige vers le dashboard admin
            } elseif ($user->hasRole('formateur')) {
                return redirect()->intended('formateur'); // Redirige vers le dashboard formateur
            } elseif ($user->hasRole('adherent')) {
                return redirect()->intended('profil'); // Redirige vers la page de profil
            }
        }

        // Redirection en cas d'échec
        return redirect()->back()->withErrors([
            'login_error' => 'Les informations d\'identification ne correspondent pas. Veuillez réessayer.',
        ]);
    }

    // Déconnexion
    public function sign_out(Request $request)
    {
        Auth::logout(); // Déconnexion de l'utilisateur

        $request->session()->invalidate(); // Invalider la session
        $request->session()->regenerateToken(); // Régénérer le token CSRF

        return redirect('index'); // Redirection vers la page d'accueil
    }
    // Déconnexion
    public function getA()
    {
        $user = User::find(1);

        dd($user->getRoleNames());

         // Redirection vers la page d'accueil
    }
}