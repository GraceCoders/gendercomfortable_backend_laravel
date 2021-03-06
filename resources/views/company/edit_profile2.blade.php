@extends('company.layouts.main')
@section('main-container')
<!-- third  -->

<section class="bg-light">
    <div class="container text-center ">
        @if (Session::get('success'))
        <small class="alert alert-success alert-block" role="alert">
            <strong>{{ Session::get('success') }}</strong>
        </small>
        @endif
        <center>
            <div class="centers">
                <div class="formdiv6 text-center ">
                    <h1 class="signuph">Edit Profile</h1>
                    <form method="POST" action="{{ route('company.update.profile',$profile->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="plusesimg">
                            @if($profile->profile_pic)
                                <label for="myfile" id="upload_label"><img class="fa fa-upload" src="{{ asset('storage/' . $profile->profile_pic) }}" alt="..." id="imgss">
                                 @else
                                 <label for="myfile" id="upload_label"><img class="fa fa-upload" src="{{ asset('assets/slicing_web/photo.jpg') }}" alt="..." id="imgss">
 
                                 @endif
                                    <span> <input type="file" accept="image/*" id="myfile" name="filename" onchange="loadFile(event)" value="upload thumbnail">
                                        <img class="img-fluid uploadimg" src=""></span>
                                </label>
                        </div>                        
                        <p class="learn">Profile Pic</p>
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="floatingInput" value="{{$profile->username}}">
                            <label for="floatingInput">UserName</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" value="{{$profile->email}}">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="company_name" class="form-control" id="floatingInput" value="{{$profile->company_name}}">
                            <label for="floatingInput">Company name</label>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="company_bio" class="form-control" id="floatingInput" value="{{$profile->bio}}">
                            <label for="floatingInput">Company bio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address" id="address" placeholder="name@example.com" value="{{$profile->address}}">
                            <input type="hidden" required id="lat" name="lat" />
                            <input type="hidden" required id="long" name="long" />
                            <label for="floatingInput">Address</label>
                        </div>
                        <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">save</button>
                </div>
            </div>
    </div>
    <center>
        </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('MAP_KEY') }}&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('imgss');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    setTimeout(function() {
        $('.alert-block').remove();
    }, 10000);

    function initialize() {
        var input = document.getElementById('address');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            document.getElementById('address').value = place.name;
            document.getElementById('lat').value = place.geometry.location.lat();
            document.getElementById('long').value = place.geometry.location.lng();
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection
