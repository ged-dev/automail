<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Fichier;
use App\Helpers\LogActivity;

class FileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Enregistre le fichier dans le dossier fichiers.
    public function post(Request $request)
    {
        $path = $request->file->store('fichiers');
        $fichier = new Fichier;
        $request->name;

        // Créer une nouvelle entrée dans la base de données.
        $fichier->path = $path;
        $fichier->user_id = auth()->id();
        $fichier->name = $request->name;
        $fichier->save();

        // Enregistre l'action dans les logs.
        LogActivity::addToLog("Fichier {$fichier->id} uploadé");

    }
}

