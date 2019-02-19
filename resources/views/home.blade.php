@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Upload de fichier') }}</div>

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
                        {{--{{                  FORMULAIRE --}}
                        <form method="GET" action="{{ route('file.post') }}" enctype="multipart/form-data">
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

                    <div>
                        <h3>Mes fichiers</h3>
                        <ul>
                            @foreach ($fichiers as $fichier)
                                <li>{{ $fichier->name }}

                                </li>
                                <a href="{{ route('file.delete', ['id' => $fichier->id]) }}">Supprimer</a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
