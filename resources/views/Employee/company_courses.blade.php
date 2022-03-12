@extends('employee.layouts.main')
@section('main-container')
    <!-- third  -->
    <section class="bg-light">
        <div class="container" id="largeimg1">
            <div> <img class="img-fluid" class="image" id="largeimg"
                    src="{{asset('storage/'.$user->profile_pic)}}" class="img-fluid" alt="...">
                <h4 id="heading41">{{$user->company_name}}</h4>
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
            <div class="row id="second12" ">
                    @foreach($data as $value)
                    <div class=" col-lg-4 col-12" id="second21">
                    <a href="{{ route('employee.course.lession',$value->course_id) }}">
                        <img class="img-fluid" id="course_cover"
                            src="{{asset('storage/'.$value['course']->thumbnail)}}" class="img-fluid" alt="..."></a>
                    <p class="image_cover4">{{$value['course']->description}}</p>
                    </div>
                    @endforeach
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
