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
                       <a href="{{url('courses2')}}"> <button type="button" class="btn btn btn-lg  " id="radius_btn1">  <img  class="img-fluid" id="plus_image"  src="slicing_web/plus_white.svg" alt="...">&nbsp;&nbsp;Add license key</button></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- third section end -->


    <!-- fourth section start -->
    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row  ">
                <div class=" col-lg-4 col-12" id="second11">
                    <img class="img-fluid" class="image" id="company-cover" src="{{asset('assets/slicing_web/company_cover.png')}}" class="img-fluid" alt="...">
                    <h3 class="image_covers">Company name</h3>
                    <p class="image_coversp"><a href="{{url('course_details')}}">View courses</a></p>
                </div>
                <div class=" col-lg-4 col-12" id="second22"> <img class="img-fluid" class="image" id="company-cover" src="{{assets('assets/slicing_web/company_cover.png')}}" class="img-fluid" alt="...">
                    <h3 class="image_covers1">Company name</h3>
                    <p class="image_coversp1"><a href="{{url('course_details')}}">View courses</a></p>
                </div>
                <div class=" col-lg-4 col-12" id="second31"> <img class="img-fluid" class="image" id="company-cover" src="{{asset('assets/slicing_web/company_cover.png')}}" class="img-fluid" alt="...">
                    <h3 class="image_covers2">Company name</h3>
                    <p class="image_coversp2"><a href="{{url('course_details')}}">View courses</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- fourth div end -->
    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row  ">
                <div class=" col-lg-4 col-12" id="second21">
                    <img class="img-fluid" class="image" id="company-cover" src="{{asset('assets/slicing_web/company_cover.png')}}" class="img-fluid" alt="...">
                    <h3 class="image_covers3">Company name</h3>
                    <p class="image_coversp3"><a href="{{url('course_details')}}">View courses</a></p>
                </div>
                <div class=" col-lg-4 col-12" id="second23"> <img class="img-fluid" class="image" id="company-cover" src="{{asset('assets/slicing_web/company_cover.png')}}" class="img-fluid" alt="...">
                    <h3 class="image_covers4">Company name</h3>
                    <p class="image_coversp4"><a href="{{url('course_details')}}">View courses</a></p>
                </div>
                <div class=" col-lg-4 col-12" id="second_company"> </div>
            </div>
        </div>
        <!-- fifth div start -->
      @endsection
