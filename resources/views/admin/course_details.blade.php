@extends('admin.layouts.main')
@section('main-container')
@php
$i = 1;
@endphp
<!-- Third div start -->
<section class="third_sec bg-light">
    <div class="container " id="largeimg1">
@if($data->thumbnail)
        <img class="img-fluid" id="largeimg" class="image" src="{{ asset('storage/' . $data->thumbnail) }}" alt="...">
        @else
        <img class="img-fluid" id="largeimg" class="image" src="{{ asset('assets/slicing_web/logo.svg') }}" alt="...">

      @endif  
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
            {{-- @if(Auth::id() == $data->user_id) --}}
            <li class="nav-item" role="presentation">
                <a href="{{route('admin.course.edit',$data->id)}}"> <button class="nav-link bg-light" id="profile-tab" type="button" role="tab">
                        <h4>Edit</h4>
                    </button></a>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg-light" id="profile-tab" type="button" role="tab"
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <h4>Delete</h4>
                </button>
            </li>
            {{-- @endif --}}
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
            <p class="donec">@php
             $open=   ProtoneMedia\LaravelFFMpeg\Support\FFMpeg::fromDisk('public')
        ->open($value->media)
        ->getFrameFromSeconds(10)
        ->export()
        ->toDisk('thumnails')
        ->save('FrameAt10sec.png');
             dd($open);
@endphp
                <a href="{{ route('media.player',$value->id ) }}">
                    @if($value->media_type == "application/pdf")

                    <img class="img-fluid" class="image" src="{{ asset('assets/slicing_web/pdf.svg') }}" height="26px" width="26px" alt="...">
                    @elseif($value->media_type == "image/jpeg" || $value->media_type == "image/png")
                    <img class="img-fluid" class="image" src="{{ asset('assets/slicing_web/home.svg') }}" height="26px" width="26px" alt="...">
                    @else
                    <img class="img-fluid" class="image" src="{{ asset('assets/slicing_web/video.svg') }}" alt="...">
                    @endif
                </a>
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
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are You sure you want Delete the course?
      </div>
      <div class="modal-footer">
        <a href="{{route('admin.course.delete',$data->id)}}"><button type="button" class="btn btn-primary" >Confirm</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
      </div>
    </div>
  </div>
</div>
@endsection