@extends('admin.layouts.main')
@section('main-container')
@php
$i =1;
@endphp
<!-- Third div start -->
    <section class="third_sec bg-light">
        <div class="container " id="largeimg1">

            <img class="img-fluid" id="largeimg" class="image" src="{{asset('assets/slicing_web/cousre_banner.png')}}" alt="...">
            <h4 id="heading41">{{$data->name}}</h4>
            <p class="pera41">${{$data->price_per_seat}}/seat</p>
        </div>
    </section>
    <nav class="third-sec bg-light">
        <div class="container" id="nav_btn">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active bg-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h4>Course details</h4></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bg-light" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h4>Course Stats</h4></button>
                        </li>
                        </ul>
                    </div>
                    </nav>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active  bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container">

                                <h5>Description</h5>
                                <p class="donec">{{$data->description}}
                                </p>
                                <h5>Certification</h5>
                                @if($data['lessons'])
                                @foreach ($data['lessons'] as $value )


                                <p>Lesson {{$i++}}</p>
                                <p class="donec"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/video.svg')}}" alt="...">{{$value->lession_name}}</p>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade bg-light" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="container">
                                <section class="third-sec bg-light">
                                    <div class="container ">
                                        <h5 class="purchase">Purchased By</h5>
                                        <div class="row  ">
                                            <div class=" col-lg-4 col-12">
                                                <div class="comapany1">
                                                    <h3>Company 1</h3>
                                                    <p>Seats purchased: 12</p>
                                                    <p>Unique course access key:<br> <span id="digit_val">83719-58015-23641-84332-09281 </span></p>
                                                </div>
                                            </div>
                                            <div class=" col-lg-4 col-12">
                                                <div class="comapany1">
                                                    <h3>Company 2</h3>
                                                    <p>Seats purchased: 12</p>
                                                    <p>Unique course access key:<br><span id="digit_val">83719-58015-23641-84332-09281 </span></p>
                                                </div>
                                            </div>
                                            <div class=" col-lg-4 col-12">
                                                <div class="comapany1">
                                                    <h3>Company 3</h3>
                                                    <p>Seats purchased: 12</p>
                                                    <p>Unique course access key:<br> <span id="digit_val">83719-58015-23641-84332-09281 </span> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="third-sec bg-light">
                                    <div class="container ">

                                        <div class="row  ">
                                            <div class=" col-lg-4 col-12" id="second1">
                                                <div class="comapany1">
                                                    <h3>Company 4</h3>
                                                    <p>Seats purchased: 12</p>
                                                    <p>Unique course access key:<br><span id="digit_val">83719-58015-23641-84332-09281 </span></p>
                                                </div>
                                            </div>
                                            <div class=" col-lg-4 col-12" id="second1">
                                                <div class="comapany1">
                                                    <h3>Company 5</h3>
                                                    <p>Seats purchased: 12</p>
                                                    <p>Unique course access key:<br><span id="digit_val">83719-58015-23641-84332-09281 </span> </p>
                                                </div>
                                            </div>
                                            <div class=" col-lg-4 col-12" id="second1">

                                            </div>
                                        </div>
                                </section>
                                </div>
                            </div>
                        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                       @endsection
