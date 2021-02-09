@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Profile</h1>
        
        
        <form action="{{ route('profile.update') }}" method="POST">
        @csrf
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" required class="form-control @error('mobile') is-invalid @enderror" value="<?php echo Auth::user()->name; ?>">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birth" value="{{ date('Y-m-d', strtotime(Auth::user()->dob)) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required <?php
                            if(Auth::user()->gender=='Male'){ echo "checked"; }
                        ?>
                        >
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required <?php
                            if(Auth::user()->gender=='Female'){ echo "checked"; }
                        ?>>
                        <label class="form-check-label" for="female" required>
                            Female
                        </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="" value="{{ Auth::user()->address }}">
                    </div>

                    
                    @livewire('form.city')


                    <input name="submit" type="submit" value="Submit" class="btn btn-primary">
                    
                </div>
            </div>
            </form>
            <h5>Education details</h5>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    @livewire('form.education')
                </div>
            </div>

        </div>
    </main>
    


    </div>
@endsection