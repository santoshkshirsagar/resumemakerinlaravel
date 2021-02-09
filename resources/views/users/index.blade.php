@extends('layouts.admin')

@section('content')
        
        <div class="container">
            <h1>Users</h1>

            <a class="btn btn-primary" href="{{ route('users.export') }}">Export</a>

            <table class="table table-borderd">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
            </table>
        </div>
@endsection