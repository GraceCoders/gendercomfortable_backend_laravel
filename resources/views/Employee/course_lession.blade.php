@extends('employee.layouts.main')
@section('main-container')
@php
$i =1;
@endphp
    <section class="bg-light">
        <div class="container" id="largeimg1">
            <h3 class="large_heading">Lorem ipsum dolor sit amet, consectetur</h3>
            <div> <img class="img-fluid" class="image" id="largeimg" src="{{asset('storage/'.$data->thumbnail)}}" class="img-fluid" alt="...">
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
                @if ($data['lessons'])
                    @foreach ($data['lessons'] as $value)
                        <p>Lesson {{ $i++ }}</p>
                        <p class="donec">
                        <img class="img-fluid" class="image"
                        
                      src="{{ asset('assets/slicing_web/video.svg') }}" alt="...">{{ $value->lession_name }}</p>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="tab-pane fade bg-light" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container">
                <h5>Description</h5>
                <p class="donec">{{$data->description}}
                </p>
                <h5>Certification</h5>
                <p class="donec">{{$data->certificate}}</p>
                <h5 class="curiheading">Curriculum</h5>
            </div>
        </div>
    </div>
    @endsection
