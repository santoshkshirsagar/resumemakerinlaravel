@extends('layouts.main')

@section('content')
    <div class="featured my-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img id="img" class="w-75" src="{{ url('/') }}/images/undraw_online_cv_qy9w.svg">
                </div>
                <div class="col-8">
                    <h2  id="welcome">Create Resume Online</h2>
                    <p>Create your professional resume by adding your information and print using our predefined templates</p>
                </div>
                
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection