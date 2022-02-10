@extends('employee.layouts.main')
@section('main-container')
    <!-- third  -->

    <section class="bg-light">
        <div class="container" id="largeimg1">
            <h3 class="large_heading">Lorem ipsum dolor sit amet, consectetur</h3>
            <div> <img class="img-fluid" class="image" id="largeimg" src="{{asset('assets/slicing_web/cousre_banner.png')}}" class="img-fluid" alt="...">
                <img class="img-fluid" class="image" id="vedioBlack" src="{{asset('assets/slicing_web/play.svg')}}" alt="...">
            </div>

        </div>
    </section>
    <nav class="third-sec bg-light">
        <div class="container" id="nav_btn">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active bg-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h4>Published</h4></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-light" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h4>More</h4></button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active  bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <p>Lesson 1</p>
                <p class="donec"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/video.svg')}}" alt="...">Duis aute irure dolor in reprehenderit in voluptate</p>
                <p>Lesson 2</p>
                <p class="donec" id="donecs_pera"> <img class="img-fluid" class="image" src="{{asset('assets/slicing_web/pdf2.svg')}}" alt="..."> Duis aute irure dolor in reprehenderit in voluptate</p>
            </div>
        </div>
        <div class="tab-pane fade bg-light" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container">
                <h5>Description</h5>
                <p class="donec">Donec et felis vehicula lorem ullamcorper sollicitudin sed non nulla. Pellentesque rutrum eget tellus at finibus. Mauris vel dignissim turpis. Nulla euismod laoreet tellus, et consectetur mauris laoreet id. Aenean eu laoreet lacus. Sed
                    sed iaculis ex. Fusce sed sollicitudin ipsum. Phasellus pulvinar tellus rhoncus ante vestibulum vehicula. Morbi viverra sit amet neque eu blandit. Donec quis mauris nisi. Pellentesque pellentesque magna in bibendum ultrices.
                </p>
                <h5>Certification</h5>
                <p class="donec">Reprehenderit in voluptate</p>
                <h5 class="curiheading">Curriculum</h5>
            </div>
        </div>
    </div>
    @endsection
