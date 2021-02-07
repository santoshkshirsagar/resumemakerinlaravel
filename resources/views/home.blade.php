@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
         

            @if(Auth::user()->image==null)
                <img src="{{ asset('images/default-avatar.png') }}" class="w-100" alt="avatar">
            @else
                <img src="{{ url('storage/'.Auth::user()->image) }}" class="w-100" alt="avatar">
            @endif

            <form action="{{ route('avatar') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <input class="form-control form-control-sm mt-2" type="file" name="image" accept="image/x-png,image/gif,image/jpeg">
                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input name="submit" type="submit" class="mt-2 btn btn-sm btn-primary" value="Upload">
            </form>

        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   
                   
                <a class="btn btn-sm btn-primary float-end ms-2" href="{{ route('profile.edit') }}">Edit Profile</a>
            <a class="btn btn-sm btn-info float-end" href="{{ route('profile.print') }}">Print Resume</a>
           
                <table class="table table-striped">
                    <tr>
                        <th colspan="2">Personal Details</th>     
                    </tr>
                    <tr>
                        <td>Name </td>   
                        <td>{{ Auth::user()->name }}</td>   
                    </tr>
                    <tr>
                        <td>Date of Birth </td>   
                        <td>{{ date("d-m-Y", strtotime(Auth::user()->dob)) }}</td>   
                    </tr>
                    <tr>
                        <td>Gender </td>   
                        <td>{{ Auth::user()->gender }}</td>   
                    </tr>
                    <tr>
                        <td>Email </td>   
                        <td>{{ Auth::user()->email }}</td>   
                    </tr>
                    <tr>
                        <td>Address </td>   
                        <td></td>   
                    </tr>
                    <tr>
                        <td>City </td>   
                        <td></td>   
                    </tr>
                    <tr>
                        <td>State </td>   
                        <td></td>   
                    </tr>
                    <tr>
                        <td>Pin </td>   
                        <td></td>   
                    </tr>
                </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
