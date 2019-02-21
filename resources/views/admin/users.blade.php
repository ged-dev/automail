@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Utilisateurs
            </div>

            <div class="row">
                <div class="col-sm-6">

                        <div class="card-body">
                            @foreach($users as $user)
                                <p>
                                {{ $user->name }}
                                </p>
                            @endforeach
                        </div>
                 </div>
            </div>
        </div>
    </div>

@endsection