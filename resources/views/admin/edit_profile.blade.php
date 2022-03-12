@extends('admin.layouts.main')
@section('main-container')
@php
$user = Auth::user();
@endphp
<!-- Third div start -->
<section class="bg-light home">
    <div class="container text-center ">
        @if (Session::get('success'))
        <small class="alert alert-success alert-block" role="alert">
            <strong>{{ Session::get('success') }}</strong>
        </small>
        @endif
        <form method="POST" action="{{ route('admin.update.profile') }}" enctype="multipart/form-data">
            @csrf
            <center>
                <div class="centers">
                    <div class="formdiv6 text-center ">
                        <h1 class="signuph">Edit Profile</h1>
                        <div class="container ">
                            <label for="myfile" id="label_img2">
                                <img class="img-fluid" src="{{ asset('storage/' . $user->profile_pic) }}" id="roundimgs">
                                <input type="file" id="myfile" name="profilepic" onchange="loadFile(event)" value="upload thumbnail">
                                <img class="img-fluid uploadimg" src=""></span>
                            </label>
                        </div>
                        <p class="learn">Profile Pic</p>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="first_name" placeholder="name@example.com" value="{{ $user->first_name }}">
                            <label for="floatingInput">Firstname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="last_name" placeholder="name@example.com" value="{{ $user->last_name }}">
                            <label for="floatingInput">Lastname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="{{ $user->email }}">
                            <label for="floatingInput">Email address</label>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="textarea" class="form-control" name="bio" id="floatingInput" value="{{ $user->bio }}" rows="3"></input>
                            <label for="floatingInput">bio</label>
                        </div>
                        <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">Save</button>
                    </div>
                </div>
    </div>
    <center>
        </form>
        </div>
</section>
@endsection
<script>
    setTimeout(function() {
        $('.alert-block').remove();
    }, 5000);
    var loadFile = function(event) {
        var image = document.getElementById('roundimgs');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
