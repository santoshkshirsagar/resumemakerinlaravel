@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Profile {{ Auth::user()->name }} </h1>
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" maxlength="40">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}">
                @error('mobile')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </div>
@endsection