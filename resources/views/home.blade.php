@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card">
                    <div class="card-header">Upload de fichier</div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        {{--{{ FORMULAIRE UPLOAD FICHIER --}}

                        <form method="POST" action="{{ route('file.post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Fichier') }}</label>
                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control" name="file">
                                    <label class="custom-file-label" for="file">Sélectionner le fichier</label>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Envoyer') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- LISTE DES FICHIERS -->
                <br />
                <div class="card">
                    <div class="card-header">Mes fichiers</div>

                    <ul class="list-group">
                        @foreach ($fichiers as $fichier)
                            <li class="list-group-item">

                                <p><b>Nom du fichier : </b>{{ $fichier->name }}</p>
                                <p><b>Date de création du fichier : </b>{{ $fichier->created_at }}</p>

                                <!-- Bouton supprimer -->
                                <a class="btn btn-danger"  href="{{ route('file.delete', ['id' => $fichier->id]) }}" role="button">Supprimer</a>

                            </li>
                        @endforeach
                    </ul>
                </div>





            </div>
        </div>
    </div>
@endsection
