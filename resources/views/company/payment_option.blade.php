@extends('company.layouts.main')
@section('main-container')
<!-- third section start -->
    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row  ">

                <div class=" col-lg-4 col-12" id="second"></div>
                <center>
                    <h3 class="paments">Payment options</h3>
                </center>
                <div class=" col-lg-4 col-12" id="second">

                    <div class="buttons">

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- third section end -->

    <section class="third-sec bg-light">
        <div class="container">
            <h5>Primary Card</h5>
            <div class="row  ">

                <div class=" col-lg-4 col-12" id="second5">
                    <div class="comapany1">

                        <img class="img-fluid" class="image" src="{{asset('assets/slicing_web/visa.svg')}}" alt="...">
                        <p>ICICI Bank Debit Card ****2034</p>
                        <p>John Doe</p>
                        <p>Expires 03/23 </p>
                        <span><p class="donec1 float-end"><img  class="img-fluid" class="image" src="{{asset('assets/slicing_web/del2.svg')}}"  alt="...">  &nbsp;Edit</p> <p class="donec1 float-end"><img  class="img-fluid" class="image" src="slicing_web/edit2.svg"  alt="..."> &nbsp;Delete</p></span>
                    </div>
                </div>
                <div class=" col-lg-8 col-12" id="second4">

                </div>

            </div>
        </div>
        </div>
    </section>




    <!-- fourth section start -->
    <section class="third-sec bg-light">
        <div class="container ">
            <div class="margineb">
                <h5 class="secondr">Secondary Card</h5>
                <div class="row  ">
                    <div class=" col-lg-4 col-12" id="second4">
                        <div class="comapany1">
                            <img class="img-fluid" class="image" src="{{asset('assets/slicing_web/visa.svg')}}" alt="...">
                            <p>ICICI Bank Debit Card ****2034</p>
                            <p>John Doe</p>
                            <p>Expires 03/23 </p>
                            <span><p class="donec1 float-end"><img  class="img-fluid" class="image" src="{{asset('assets/slicing_web/del2.svg')}}"  alt="...">  &nbsp;Edit</p> <p class="donec1 float-end"><img  class="img-fluid" class="image" src="slicing_web/edit2.svg"  alt="..."> &nbsp;Delete</p></span>
                        </div>
                    </div>


                    <div class=" col-lg-4 col-12" id="second4">
                        <div class="comapany1">
                            <img class="img-fluid" class="image" src="{{asset('assets/slicing_web/visa.svg')}}" alt="...">
                            <p>ICICI Bank Debit Card ****2034</p>
                            <p>John Doe</p>
                            <p>Expires 03/23 </p>
                            <span><p class="donec1 float-end"><img  class="img-fluid" class="image" src="{{asset('assets/slicing_web/del2.svg')}}"  alt="...">  &nbsp;Edit</p> <p class="donec1 float-end"><img  class="img-fluid" class="image" src="slicing_web/edit2.svg"  alt="..."> &nbsp;Delete</p></span>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-12">
                        <div class="comapany12 text-center">
                           <a href="{{url('/add_payment')}}"> <img class="image-fluid" src="{{asset('assets/slicing_web/add_grey.svg')}}" class="img-fluid" alt="..."></a>
                            <p class="gray">Add new card</p>
                        </div>
                    </div>
                </div>
    </section>
    <!-- fourth div end -->

    <!-- fifth div start -->


    <!-- fifth div end -->



    @endsection
