@extends('layouts.app')

@section('content')


        <form method="POST" action="{{ route('file.confirm', ['id' => $fichier->id]) }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group row mb-0">
                <div class="col-md-2 offset-md-4">
                    <div class="card-header">
                        {{ __('Confirmez la suppression du fichier') }}
                    </div>
                    <a href="{{ route('home') }}" class="btn btn-secondary" >Annuler</a>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Confirmer') }}
                    </button>
                </div>
            </div>
        </form>

@endsection