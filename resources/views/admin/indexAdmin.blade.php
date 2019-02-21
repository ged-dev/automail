@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Administration') }}</div>

        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Logs</h5>
                        <p class="card-text">Listing des actions des utilisateurs.</p>
                        <a href="{{ route('logActivity') }}" class="btn btn-primary">Consulter</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Liste des utilisateurs</h5>
                        <p class="card-text">Liste des utilisateurs enregistrés dans la base de donnée.</p>
                        <a href="{{ route('admin.users') }}" class="btn btn-primary">Consulter</a>
                    </div>
                </div>
            </div>
        </div>













    </div>


@endsection
