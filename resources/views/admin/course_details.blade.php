@extends('admin.layouts.main')
@section('main-container')
@php
$i = 1;
@endphp
<!-- Third div start -->
<section class="third_sec bg-light">
    <div class="container " id="largeimg1">

        <img class="img-fluid" id="largeimg" class="image" src="{{ asset('storage/' . $data->thumbnail) }}" alt="...">
        <h4 id="heading41">{{ $data->name }}</h4>
        <p class="pera41">${{ $data->price_per_seat }}/seat</p>
    </div>
</section>
<nav class="third-sec bg-light">
    <div class="container" id="nav_btn">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active bg-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                    <h4>Course details</h4>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg-light" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                    <h4>Course Stats</h4>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <a href="{{route('admin.course.edit',$data->id)}}"> <button class="nav-link bg-light" id="profile-tab" type="button" role="tab">
                        <h4>Edit</h4>
                    </button></a>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg-light" id="profile-tab" type="button" role="tab" data-toggle="modal" data-target="#exampleModal52">
                    <h4>Delete</h4>
                </button>
            </li>
        </ul>
    </div>
</nav>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active  bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="container">

            <h5>Description</h5>
            <p class="donec">{{ $data->description }}
            </p>
            <h5>Certification</h5>
            <p class="donec">{{ $data->certificate }}
            </p>
            <h5>Curriculum</h5>
            @if ($data['lessons'])
            @foreach ($data['lessons'] as $value)
            <p>Lesson {{ $i++ }}</p>
            <p class="donec">
                <a href="{{ asset('storage/' . $value->media) }}" target="_blank">
                    <img class="img-fluid" class="image" src="{{ asset('assets/slicing_web/video.svg') }}" alt="..."></a>
                {{ $value->lession_name }}
            </p>
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
                        @if(count($purchaseCourse) != 0);
                        @foreach($purchaseCourse as $value)
                        <div class=" col-lg-4 col-12">
                            <div class="comapany1">
                                <h3>{{$value['users']->company_name}}</h3>
                                <p>Seats purchased: {{$value->no_of_seat}}</p>
                                <p>Unique course access key:<br> <span id="digit_val">{{$value->purchase_key}}
                                    </span></p>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class=" col-lg-4 col-12">
                            <div class="comapany1">
                                <span></span>No One Purchased Your Courses
                            </div>
                        </div>
                        @endif


                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal52" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " id="modal-dialog2">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container text-center">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4>Select account type</h4>
                    <div class="row  " id="account_row " style="display:inline-flex">
                        <div class=" col-lg-4 col-12 bg-light text-center " id="account_image">
                            <img class="image" src="slicing_web/pdf.svg" class="img-fluid" alt="..." />
                            <p>Pdf</p>
                        </div>
                        <div class="col-lg-4 col-12 bg-light text-center" id="account_image">
                            <img class="image" src="slicing_web/vid.svg" class="img-fluid" alt="..." /></a>
                            <p>video</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
@endsection