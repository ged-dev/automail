<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {

        // Trouve tous les fichiers de l'utilisateur.
        $fichiers = auth()->user()->fichiers;

        // Fait le rendu de la template en HTML.
        return view('home', ['fichiers' => $fichiers]);
    }
}
