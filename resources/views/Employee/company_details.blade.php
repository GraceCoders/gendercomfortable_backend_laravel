@extends('employee.layouts.main')
@section('main-container')
    <!-- third  -->
<section class="bg-light">
        <div class="container" id="largeimg1">
            <div> <img class="img-fluid" class="image" id="largeimg" src="{{asset('assets/slicing_web/company_cover.png')}}" class="img-fluid" alt="...">
                <h4 id="heading41">Company name</h4>
            </div>


        </div>
    </section>
     <!-- third div end -->
    <!-- fourth div start -->
    <section class="third-sec bg-light">
        <div class="container ">
            <p>Donec et felis vehicula lorem ullamcorper sollicitudin sed non nulla. Pellentesque rutrum eget tellus at finibus. Mauris vel dignissim turpis. Nulla euismod laoreet tellus, et consectetur mauris laoreet id. Aenean eu laoreet lacus. Sed sed
                iaculis ex. Fusce sed sollicitudin ipsum. Phasellus pulvinar tellus rhoncus ante vestibulum vehicula. Morbi viverra sit amet neque eu blandit. Donec quis mauris nisi. Pellentesque pellentesque magna in bibendum ultrices.
            </p>
            <div class="row">
                <div class=" col-lg-6 col-12" id="second">
                    <h3>Reviews & Ratings</h3>
                </div>
                <div class=" col-lg-6 col-12 float-end" id="second"><span><p class="donec1 float-end"><img  class="img-fluid "src="{{asset('assets/slicing_web/star_sm.svg')}}"  alt="...">  &nbsp;4.0 (6)</p></span></div>
            </div>
            <div class="line"></div>
            <div class="row  ">
                  <div class=" col-lg-6 col-12" id="second">
                    <span><p class="donec1 "><img  class="img-fluid" id="image_radius" src="{{asset('assets/slicing_web/profile_pic.png')}}"  alt="...">  &nbsp;Lisa Hyden</p></span>
                    <span><p class="donec1 "><img  class="img-fluid" class="image" src="{{asset('assets/slicing_web/star_sm.svg')}}"  alt="...">  &nbsp;<img  class="img-fluid" class="image" src="slicing_web/star_sm.svg"  alt="..."> &nbsp;<img  class="img-fluid" class="image" src="slicing_web/star_sm.svg"  alt="...">  &nbsp;<img  class="img-fluid" class="image" src="slicing_web/star_inactive.svg"  alt="...">  &nbsp;<img  class="img-fluid" class="image" src="slicing_web/star_inactive.svg"  alt="..."> </p></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span><p class="donec1 "><img  class="img-fluid" id="image_radius" src="{{asset('assets/slicing_web/profile_pic.png')}}"  alt="...">  &nbsp;John Doe</p>
                                <span><p class="donec1 "><img  class="img-fluid" class="image" src="{{asset('assets/slicing_web/star_sm.svg')}}"  alt="...">  &nbsp;<img  class="img-fluid" class="image" src="slicing_web/star_sm.svg"  alt="..."> &nbsp;<img  class="img-fluid" class="image" src="slicing_web/star_sm.svg"  alt="...">  &nbsp;<img  class="img-fluid" class="image" src="slicing_web/star_inactive.svg"  alt="...">  &nbsp;<img  class="img-fluid" class="image" src="slicing_web/star_inactive.svg"  alt="..."> </p></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class=" col-lg-6 col-12" id="second">
                    <div class="formdiv51 float-end">
                        <h5>Share feedback</h5> <span><p class="donec1 "><img  class="img-fluid" id="image_radius" src="{{asset('assets/slicing_web/profile_pic.png')}}"  alt="...">  &nbsp;<img  class="img-fluid" src="slicing_web/star_lined.svg">&nbsp;&nbsp;<img  class="img-fluid" src="slicing_web/star_lined.svg">&nbsp;&nbsp;<img  class="img-fluid" src="slicing_web/star_lined.svg">&nbsp;&nbsp;<img  class="img-fluid" src="slicing_web/star_lined.svg">&nbsp;&nbsp;<img  class="img-fluid" src="slicing_web/star_lined.svg"></span>
                        <div class="bg-light">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">No. of seats</label>
                            </div>
                        </div>
                        <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkouts">Submit</button>
                    </div>
                </div>

            </div>
    </section>
    @endsection
