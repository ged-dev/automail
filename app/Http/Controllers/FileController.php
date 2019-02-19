<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Fichier;
use App\Helpers\LogActivity;
use Illuminate\Support\Facades\Storage;

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
            'file' => 'required|mimes:csv',
            'name' => 'required'
        ]);

        // Sauvegarde le fichier dans le dossier fichiers et renomme le fichier avec le nom entré dans le formulaire.
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

    public function delete(Request $request)
    {
        $fichier = Fichier::findOrFail($request->id);
        return view('files.delete', ['fichier' => $fichier]);
    }

    public function delete_confirm(Request $request)
    {
        $fichier = Fichier::findOrFail($request->id);
        Storage::delete($fichier->path);
        LogActivity::addToLog("Fichier {$fichier->id} supprimé");
        $fichier->delete();

        return redirect('/home');
    }
}

