@extends('admin.layouts.main')
@section('main-container')
    <!-- second div start -->

    <!-- Third div start -->
    <section class="third-sec bg-light">
        <div class="container " id="nav_btn">

            <!-- <div class="row" > -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active bg-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
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
        </div>

    </section>

    <!-- third div end -->
    <!-- fourth div start -->
    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row" id="second12">
                <div class=" col-lg-4 col-12" id="second11">
                    <a href="{{ url('course_details') }}"><img class="img-fluid" class="image"
                            id="course_cover" src="{{ asset('assets/slicing_web/course_cover1.png') }}"
                            class="img-fluid" alt="..."></a>
                    <p class="image_cover"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
                <div class=" col-lg-4 col-12" id="second22"><a href="{{ url('course_details') }}"> <img
                            class="img-fluid" class="image" id="course_cover"
                            src="{{ asset('assets/slicing_web/course_cover2.png') }}" class="img-fluid" alt="..."></a>
                    <p class="image_cover1"> Lorem ipsum dolor sit amet,<br> consectetur</p>
                </div>
                <div class=" col-lg-4 col-12" id="second31"> <a href="{{ url('course_details') }}"><img
                            class="img-fluid" class="image" id="course_cover"
                            src="{{ asset('assets/slicing_web/course_cover1.png') }}" class="img-fluid" alt="..."></a>
                    <p class="image_cover2"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
            </div>
        </div>
    </section>
    <!-- fourth div end -->
    <!-- fifth div start -->

    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row  " id="">
                <div class=" col-lg-4 col-12" id="second21">
                    <img class="img-fluid" id="course_cover" src="{{ asset('assets/slicing_web/course_cover1.png') }}"
                        class="img-fluid" alt="...">
                    <p class="image_cover4"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
                <div class=" col-lg-4 col-12" id="second23"> <img class="img-fluid" class="image"
                        id="course_cover" src="{{ asset('assets/slicing_web/course_cover2.png') }}" class="img-fluid"
                        alt="...">

                    <p class="image_cover5"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
                <div class=" col-lg-4 col-12" id="second33"> <img class="img-fluid" class="image"
                        id="course_cover" src="{{ asset('assets/slicing_web/course_cover1.png') }}" class="img-fluid"
                        alt="...">
                    <p class="image_cover6">Lorem ipsum dolor sit amet,<br>consectetur</p>
                </div>
            </div>
        </div>
    </section>
    <!-- fifth div end -->

    <!-- six section start -->

    <section class="third-sec bg-light">
        <div class="container text-center ">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>

                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>

                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">9</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>

    </section>

@endsection
