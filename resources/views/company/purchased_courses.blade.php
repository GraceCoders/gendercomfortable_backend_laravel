@extends('company.layouts.main')
@section('main-container')
 <!-- fourth section start -->
    <section class="third-sec bg-light">
        <div class="container ">
            <center>
                <h1 class="payments">Purchased courses</h1>
            </center>
            <div class="row  ">
                <div class=" col-lg-4 col-12" id="second"> <img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover1')}}.png" class="img-fluid" alt="...">
                    <p>Lorem ipsum dolor sit amet, conse etur
                    </p>
                    <h4 class="payment_heading">$720</h4>
                </div>
                <div class=" col-lg-4 col-12" id="second"> <img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover2.png')}}" class="img-fluid" alt="...">
                    <p>Lorem ipsum dolor sit amet, conse etur
                    </p>
                    <h1 class="payment_heading">$720</h1>
                </div>
                <div class=" col-lg-4 col-12" id="second"> <img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover1.png')}}" class="img-fluid" alt="...">
                    <p>Lorem ipsum dolor sit amet, conse etur
                    </p>
                    <h1 class="payment_heading">$720</h1>

                </div>
            </div>
        </div>
    </section>
    <!-- fourth div end -->
    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row  ">
                <div class=" col-lg-4 col-12" id="second_company">
                    <img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover1.png')}}" class="img-fluid" alt="...">
                    <p>Lorem ipsum dolor sit amet, conse etur
                    </p>
                    <h1 class="payment_heading">$720</h1>
                </div>
                <div class=" col-lg-4 col-12" id="second_company"> <img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover2.png')}}" class="img-fluid" alt="...">
                    <p>Lorem ipsum dolor sit amet, conse etur
                    </p>
                    <h1 class="payment_heading">$720</h1>
                </div>
                <div class=" col-lg-4 col-12" id="second_company"> <img class="img-fluid" class="image" id="course_cover" src="{{asset('asset/slicing_web/course_cover1.png')}}" class="img-fluid" alt="...">
                    <p>Lorem ipsum dolor sit amet, conse etur
                    </p>
                    <h1 class="payment_heading">$720</h1>
                </div>

            </div>
        </div>
        <!-- fifth div start -->


    @endsection