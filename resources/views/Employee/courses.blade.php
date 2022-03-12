@extends('employee.layouts.main')
@section('main-container')
    <!-- third section start -->
    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row  ">

                <div class=" col-lg-4 col-12" id="second"></div>
                <div class=" col-lg-4 col-12" id="second">
                    <center>
                        <h3>courses</h3>
                    </center>
                </div>
                <div class=" col-lg-4 col-12" id="second">

                    <div class="buttons">
                        <a href="{{ url('/employee/license') }}">
                            <button type="button" class="btn btn btn-lg  " id="radius_btn1"> <img class="img-fluid"
                                    id="plus_image" src="{{asset('assets/slicing_web/plus_white.svg')}}" alt="...">&nbsp;&nbsp;Add license
                                key</button></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- third section end -->


    <!-- fourth section start -->
    <section class="third-sec bg-light">
    @if (Session::get('success'))
   <small class="alert alert-success form-control alert-block" role="alert">
   <strong>{{ Session::get('success') }}</strong>
  </small>
  @endif
        <div class="container ">

            <div class="row " id="second12">
              @foreach($data as $value)
                <div class=" col-lg-4 col-12" id="second11">
                    <img class="img-fluid" class="image" id="course_cover"
                        src="{{asset('storage/'.$value->profile_pic)}}" class="img-fluid" alt="...">
                    <h3 class="image_covers">{{$value->company_name}}</h3>
                    <p class="image_coversp"><a href="{{ route('employee.coursedetails',$value->id) }}">View courses</a></p>
                </div>
               @endforeach
            </div>
        </div>
    @endsection
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).ready(function(){
    setTimeout(function() {
        $(".alert-block").hide('blind', {}, 500)
    }, 5000);
})
</script>
