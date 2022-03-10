@extends('company.layouts.main')
@section('main-container')
<!-- third  -->

    <section class="bg-light">
        <div class="container text-center " >

      <center>  <div class="centers">
            <div class="formdiv6 text-center ">
                            <h1 class="signuph">Edit Profile</h1>
<form method="POST" action="{{ route('company.update.profile',$profile->id) }}" enctype="multipart/form-data"> 
    @csrf
                            <div class="plusesimg">
                                <img class="image-fluid" src="{{asset('assets/slicing_web/company_cover.png')}}" id="profilepic2" alt="...">
                                <img class="img-fluid" id="pluspic1" src="{{asset('assets/slicing_web/plus_white.svg')}}" alt="...">
                            </div>
                            <p class="learn">Profile Pic</p>
                            <div class="form-floating mb-3">
                                <input type="text" name="username" class="form-control" id="floatingInput"  value="{{$profile->username}}">
                                <label for="floatingInput">Lastname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email"class="form-control" id="floatingInput"  value="{{$profile->email}}">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="text" name="company_name" class="form-control" id="floatingInput"  value="{{$profile->company_name}}">
                                <label for="floatingInput">Company name</label>
                            </div>

                            <div class="form-floating mb-3 mt-3">
                                <input type="text" name="company_bio" class="form-control" id="floatingInput"  value="{{$profile->bio}}">
                                <label for="floatingInput">Company bio</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="textarea"  name="address"class="form-control" id="floatingInput"  value="{{$profile->address}}">
                                <label for="floatingInput">Address</label>
                            </div>
                            <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">save</button>
                        </div>
                    </div>
        </div>
        <center>
        </div>
 </section>
    @endsection
