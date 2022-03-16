<!DOCTYPE html>
<html lang="en">
<style>
    div#content {
        height: 79px;
        width: 138px;
        background-color: lightskyblue;
        border-radius: 22px;
    }
</style>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Gender Comfortable</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/slicing_web/logo.svg') }}">


  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('MAP_KEY') }}&libraries=places&callback=initAutocomplete" type="text/javascript"></script>

</head>
@php
$data = DB::table('categories')
->where('status', 1)
->get();
@endphp

<body onload="InitMap();">
    <section class="purple top-bar">
        <div class="container">
            <div class="clearfix">
                <div class="float-end">
                    <a href=""> <img class="image-fluid" src="{{ asset('assets/slicing_web/mail.svg') }}" class="img-fluid" alt="..."></a>
                    </a>
                    <p>support@gendercomfortable.com</p>
                    <a href=""><img class="image-fluid" src="{{ asset('assets/slicing_web/fb.svg') }}" class="img-fluid" alt="..."></a>
                    <a href=""><img class="image-fluid" src="{{ asset('assets/slicing_web/insta.svg') }}" class="img-fluid" alt="..."></a>
                    <a href=""><img class="image-fluid" src="{{ asset('assets/slicing_web/linkedin.svg') }}" class="img-fluid" alt="...">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- second div start -->
    <section class="bg-lightn ">
        <div class="container">
            <div class="row">
                <div class=" col-lg-2 col-12" id="second">
                    <a href="{{ route('admin.signup') }}"> <img class="img-fluid" src="{{ asset('assets/slicing_web/logo.svg') }}" class="img-fluid" alt="..."></a>
                </div>
                <div class="col-lg-10 col-12" id="second">
                    <div class="buttons">
                        <button type="button" class="button1 button1-lg" data-bs-toggle="modal" data-bs-target="#exampleModal51">Get Started</button>
                        <a href="{{ url('/user/login') }}"> <button type="button" class="button2 button2-lg" data-bs-toggle="modal" data-bs-target="#exampleModal52">login</button></a>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal51" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog " id="modal-dialog2">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container text-center">
                                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <h1>Select account type</h1>
                                    <div class="row  " id="account_row " style="display:inline-flex">
                                        <div class=" col-lg-4 col-12 bg-light text-center " id="account_image">
                                            <a href="{{ route('company.signup') }}"><img class="image" src="{{ asset('assets/slicing_web/company.svg') }}" class="img-fluid" alt="..." /></a>
                                            <p>company</p>
                                        </div>
                                        <div class="col-lg-4 col-12 bg-light text-center" id="account_image">
                                            <a href="{{ route('employee.signup') }}"><img class="image" src="{{ asset('assets/slicing_web/employee.svg') }}" class="img-fluid" alt="..." /></a>
                                            <p>employee</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <hr class="line "></hr> -->
    </section>



    <section class="bg-light header_border "></section>
    <section class="one">
        <div class="container">
            <center> <a class="oneheading" href="{{ route('company.index2') }}">
                    <h4 class="oneheading mb-3">Employee/Business Login <a class="oneheading" href="{{ route('admin.signup') }}">/admin</h4>
                </a></center>
        </div>
    </section>
    <section class="two">
        <div class="container text-center">
            <h5 class="mt-3">Find Gender confortable certified businesses</h5>
        </div>
    </section>
    <section class="three">
        <div class="container">
            <center>
                <div class="buttonshome" style="display:inline-flex">
                    <div class="dropdown " id="dropdowns1">
                        <select class="selectpicker form-control btn btn-bg-light dropdown-toggle"id="dropdownMenuButton15" multiple="multiple" name="category_id[]" data-live-search="true">
                            <option value="0"> Business Type/Category</option>
                            @foreach ($data as $value)
                            <option id="cat_id" value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <button type="button" class="button button-lg" id="filter">Filter</button>
                </div>
            </center>
        </div>
    </section>
    <section class=" container maps">
        <div id="map" style="height: 650px; width: 100%;">
    </section>
    <section class="">
        <div class="container">
        </div>
        <section>
            <div class="container">
                <h6 class="colorsgray">There are {{count($user)}} gender confortable in the current search area is there is a
                    business you like to see on this map ? click here for information you can send them for becoming
                    certified</h6>
            </div>
        </section>
    </section>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxrWlbuESbKOX8ZEtiflupNNcVjesb5sA"></script>
<script type="text/javascript">
    $(".button").click(function() {
        var id = $('#dropdownMenuButton15').val();
        $.ajax({
            type: 'POST',
            url: "{{route('location.index')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                "id": id
            },
            success: function(data) {
                var result = JSON.parse(data);
                var locate = [];
                for (let i = 0; i < result.length; i++) {
                    if (result[i].latitude) {
                        var final = [];
                        final.push(result[i].address, result[i].latitude, result[i].longitude);
                    }
                    locate.push(final)
                }
                var locations = locate;
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: new google.maps.LatLng(result[0].latitude, result[0].longitude),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                var infowindow = new google.maps.InfoWindow();
                var marker, i;
                for (i = 0; i < result.length; i++) {

                    var image = "http://74.208.82.197/gendercomfortable/public/storage/" + result[i].profile_pic;
                    var contentString = '<div class="formdiv511 "><h6 class="donec1"><img class="img-fluid" class="image" src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/certified.svg" alt="..."> &nbsp;Certified</h6></a><div class="row"><div class="col-lg-6 col-9"> <img class="img-fluid" class="image" id="company-cover1" src="' + image + '" style="width:150px; height:80px" class="img-fluid" alt="..."></div><div class="col-lg-6 col-9"><h5>' + result[i].company_name + '</h5><span><p class="donec1"><img  class="img-fluid"class="image"src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_sm.svg"  alt="...">  &nbsp;<img  class="img-fluid" class="image" src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_sm.svg"  alt="..."> &nbsp;<img class="img-fluid" class="image" src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_sm.svg"  alt="...">  &nbsp;<img class="img-fluid" class="image" src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_sm.svg"  alt="...">  &nbsp;<img  class="img-fluid" class="image"src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_inactive.svg"  alt="..."> </p></span></div></div></div>';
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent(contentString);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            }
        });
    });

    function InitMap() {
        navigator.geolocation.getCurrentPosition(showPosition)
    }

    function showPosition(position) {
        var x = position.coords.latitude;
        var y = position.coords.longitude;
        if (x, y) {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: new google.maps.LatLng(x, y),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(x, y),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(contentString);
                    infowindow.open(map, marker);
                }
            })(marker));
        } else {}
    }
    $(document).ready(function() {
        var result = <?php echo $user; ?>;

        var locate = [];
        for (let i = 0; i < result.length; i++) {
            if (result[i].latitude) {
                var final = [];
                final.push(result[i].address, result[i].latitude, result[i].longitude);
            }
            locate.push(final)
        }
        var locations = locate;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: new google.maps.LatLng(result[0].latitude, result[0].longitude),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        for (i = 0; i < result.length; i++) {
            var image = "http://74.208.82.197/gendercomfortable/public/storage/" + result[i].profile_pic;
            var contentString = '<div class="formdiv511 "><h6 class="donec1"><img class="img-fluid" class="image" src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/certified.svg" alt="..."> &nbsp;Certified</h6></a><div class="row"><div class="col-lg-6 col-9"> <img class="img-fluid" class="image" id="company-cover1" src="' + image + '" style="width:150px; height:80px" class="img-fluid" alt="..."></div><div class="col-lg-6 col-9"><h5>' + result[i].company_name + '</h5><span><p class="donec1"><img  class="img-fluid"class="image"src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_sm.svg"  alt="...">  &nbsp;<img  class="img-fluid" class="image" src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_sm.svg"  alt="..."> &nbsp;<img class="img-fluid" class="image" src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_sm.svg"  alt="...">  &nbsp;<img class="img-fluid" class="image" src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_sm.svg"  alt="...">  &nbsp;<img  class="img-fluid" class="image"src="http://74.208.82.197/gendercomfortable/public/assets/slicing_web/star_inactive.svg"  alt="..."> </p></span></div></div></div>';
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(contentString);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    });
</script>