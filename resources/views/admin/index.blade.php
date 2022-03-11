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

    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
@php
$data = DB::table('category')
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
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
                        <select class="btn btn-bg-light dropdown-toggle" type="button" id="dropdownMenuButton15" data-bs-toggle="dropdown" aria-expanded="false">
                            <option value="0"> Business Type/Category</option>
                            @foreach ($data as $value)
                            <option id="cat_id" value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                            </ul>
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
                    var image = "http://127.0.0.1:8000/storage/" + result[i].profile_pic;
                    var contentString = '<div id="content"><div id="siteNotice"></div><p><center><h1 id="firstHeading" class="firstHeading">' + result[i].company_name + '</h1></center></p><p><center><h3></h3></center></p><div id="bodyContent"><img src=' + image + ' heigth=100px; width=100px;></div></div>';
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
        } else {
        }
    }
 $( document ).ready(function() {
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
                var image = "http://127.0.0.1:8000/storage/" + result[i].profile_pic;
                var contentString = '<div id="content"><div id="siteNotice"></div><p><center><h1 id="firstHeading" class="firstHeading">' + result[i].company_name + '</h1></center></p><p><center><h3></h3></center></p><div id="bodyContent"><img src=' + image + ' heigth=100px; width=100px;></div></div>';
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