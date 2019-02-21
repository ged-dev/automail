@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="container">
        <div class="card">
            <div class="card-header">Logs</div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Subject</th>
                <th>URL</th>
                <th>Method</th>
                <th>Ip</th>
                <th width="300px">User Agent</th>
                <th>User Id</th>
                <th>Test</th>
                <th>Action</th>
            </tr>
            @if($logs->count())
            @foreach($logs as $key => $log)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $log->subject }}</td>
                <td class="text-success">{{ $log->url }}</td>
                <td><label class="label label-info">{{ $log->method }}</label></td>
                <td class="text-warning">{{ $log->ip }}</td>
                <td class="text-danger">{{ $log->agent }}</td>
                <td>{{ $log->user_id }}</td>
                <td>{{ $log->user_id_test }}</td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
            @endforeach
            @endif

        </table>
    </div>



@endsection