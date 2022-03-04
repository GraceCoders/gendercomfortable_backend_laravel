@extends('employee.layouts.main')
@section('main-container')
    <!-- third  -->
    <section class="bg-light">
        <div class="container" id="largeimg1">
            <div> <img class="img-fluid" class="image" id="largeimg"
                    src="{{ asset('assets/slicing_web/company_cover.png') }}" class="img-fluid" alt="...">
                <h4 id="heading41">Company name</h4>
            </div>
        </div>
    </section>
    <!-- Third div start -->
    <nav class="third-sec bg-light">
        <div class="container" id="nav_btn">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active bg-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">
                        <h4>Course Offered</h4>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-light" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">
                        <h4>Course Details</h4>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- third div end -->
    <!-- fourth div start -->
    <section class="third-sec bg-light">
        <div class="container ">
            <div class="row  ">
                <div class=" col-lg-4 col-12" id="second21">
                    <a href="{{ url('course_lession') }}"> <img class="img-fluid" id="course_cover"
                            src="{{ asset('assets/slicing_web/course_cover1.png') }}" class="img-fluid" alt="..."></a>
                    <p class="image_cover4"> Lorem ipsum dolor sit amet, consectetur</p>
                </div>
                <div class=" col-lg-4 col-12" id="second23"> <img class="img-fluid" class="image"
                        id="course_cover" src="{{ asset('assets/slicing_web/course_cover2.png') }}" class="img-fluid"
                        alt="...">
                    <p class="image_cover"> Lorem ipsum dolor sit amet, consectetur</p>
                    <p class="image_cover5"> Lorem ipsum dolor sit amet, consectetur</p>
                </div>
                <div class=" col-lg-4 col-12 margines" id="second"> </div>
            </div>
        </div>
    </section>
    <!-- fourth div end -->
    <section class="purple footer-bar">
        <div class="container">
            <div class="clearfix">
                <div class="footer">
                    <p>Copyright@2021 GenderComfortable All Right Reserved &nbsp; Term and Conditions| Privacy Policy</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    </body>
    </html>
@endsection
