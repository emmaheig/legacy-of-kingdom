<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Inscription d'un nouvel utilisateur.
     */
    public function register(Request $request)
    {
        // Valider les données envoyées par la requête
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:4',
        ]);

        // Créer l'utilisateur
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return response()->json([
            'message' => 'Inscription réussie.',
            'user'    => $user,
        ], 201);
    }

    /**
     * Connexion d'un utilisateur existant.
     */
public function login(Request $request)
    {
        $data = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($data)) {
            return response()->json(['message' => 'Identifiants invalides.'], 422);
        }

        $request->session()->regenerate();

        $user = Auth::user();

        return response()->json([
          'message'      => 'Connexion réussie.',
          'user'         => $user,
        ], 200);
    }

    /**
     * Déconnexion de l'utilisateur en révoquant le token courant.
     */
    public function logout(Request $request)
    {
       $request->session()->invalidate();
       $request->session()->regenerate();
       Auth::logout();

        return response()->json([
            'message' => 'Déconnexion réussie.',
        ]);
    }

    /**
     * Récupérer les informations de l'utilisateur connecté.
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
