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
        // Validate la requête.
        $data = $request->validate([
            'file' => 'required',
            'name' => 'required'
        ]);

        // Sauvegarde le fichier dans le dossier fichiers.
        $path = $request->file->store('fichiers');

        // Créer une nouvelle entrée dans la base de données.
        $fichier = new Fichier;
        $fichier->path = $path;
        $fichier->user_id = auth()->id();
        $fichier->name = $request->name;
        $fichier->save();

        // Enregistre l'action dans les logs.
        LogActivity::addToLog("Fichier {$fichier->id} uploadé");

        return redirect('/home');

        // Sauvegarde le fichier dans le dossier fichiers.
        $path = $request->file->store('fichiers');

        // Créer une nouvelle entrée dans la base de données.
        $fichier = new Fichier;
        $fichier->path = $path;
        $fichier->user_id = auth()->id();
        $fichier->name = $request->name;
        $fichier->save();

        // Enregistre l'action dans les logs.
        LogActivity::addToLog("Fichier {$fichier->id} uploadé");

        return redirect('/home');

    }
}

