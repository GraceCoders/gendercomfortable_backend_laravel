@extends('admin.layouts.main')
@section('main-container')
    <!-- second div start -->

    <!-- Third div start -->
    <section class="third-sec bg-light">
        <div class="container " id="nav_btn">

            <!-- <div class="row" > -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active bg-light"  id="profile-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">
                        <h4>Published</h4>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-light" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">
                        <h4>Drafts</h4>
                    </button>
                </li>
           </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>

            </div>
            <a href="{{ route('admin.coures.view') }}"><button type="button" class="btn btn btn-lg float-end "
                    id="radius_btn12"> <img class="img-fluid" id="plus_image"
                        src="{{ asset('assets/slicing_web/plus_white.svg') }}" alt="...">&nbsp;&nbsp;create
                    course</button></a>

        </div>

        </div>
        </div>

    </section>
     <!-- third div end -->
    <!-- fourth div start -->
    <section class="third-sec bg-light">
        <div class="container ">
            <div class="row" id="second12">
                @foreach ($course as $value)
                <div class=" col-lg-4 col-12" id="second11">
                    <a href="{{ route('admin.publish.course',$value->id) }}"><img class="img-fluid" class="image"
                            id="course_cover" src="{{ asset('storage/app/public/'.$value->thumbnail) }}"
                            class="img-fluid" alt="..."></a>
                    <p class="image_cover"> {{$value->name}} <br>{{$value->description}}</p>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    {{$course->links()}}
@endsection
