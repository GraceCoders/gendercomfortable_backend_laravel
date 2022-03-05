@extends('admin.layouts.main')
@section('main-container')
    @php
    $i = 1;
    @endphp
    <!-- Third div start -->
    <section class="third_sec bg-light">
        <div class="container " id="largeimg1">

            <img class="img-fluid" id="largeimg" class="image" src="{{ asset('storage/' . $data->thumbnail) }}"
                alt="...">
            <h4 id="heading41">{{ $data->name }}</h4>
            <p class="pera41">${{ $data->price_per_seat }}/seat</p>
        </div>
    </section>
    <nav class="third-sec bg-light">
        <div class="container" id="nav_btn">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active bg-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">
                        <h4>Course details</h4>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-light" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">
                        <h4>Course Stats</h4>
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
                @if ($data['lessons'])
                    @foreach ($data['lessons'] as $value)
                        <p>Lesson {{ $i++ }}</p>
                        <p class="donec"><img class="img-fluid" class="image"
                                src="{{ asset('assets/slicing_web/video.svg') }}" alt="...">{{ $value->lession_name }}</p>
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
                       

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
