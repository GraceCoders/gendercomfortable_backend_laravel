@extends('company.layouts.main')
@section('main-container')
 <!-- Third div start -->
           <section class="bg-light">
            <div class="container  " >

            <div class="centers ">
                <div class="formdiv61  ">
 <center> <h1 class="signuph" >Order</h1></center>

                        <h5>Order details</h5>
                      <div class="row">
                        <div class="  col-lg-4 col-12 " id="ckeck1"><img   class="img-fluid" class="image"  src="{{asset('assets/slicing_web/cousre_banner.png')}}" id="checkout_img" alt="..."></div>
                        <div class="  col-lg-8 col-12 " id="check1"> <h5 >Duis aute irure dolor in
                            reprehenderit X 20 (seats)</h5>
                <h6 class="payment_heading">$120/seat</h6></div>
                      </div>
                      <div class="line"></div>
                      <h5>Payment method</h5>
                        <div class="row">
                            <div class="  col-lg-10 col-12 ">
                      <span><p class="donec1 "><img  class="img-fluid" class="image" src="{{asset('assets/slicing_web/payment.svg')}}"  alt="...">  &nbsp;ICICI Bank Debit Card ****2034</p>
                      </div>
                      <div class="  col-lg-2 col-12 "> <img  class="img-fluid" src="{{asset('assets/slicing_web/next.svg')}}" class="img-fluid"  alt="..."> </div></div>

                       <a href="{{url('ckeckuout2')}}"> <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout2">Checkout</button></a>




                     </div>


                    </div>
        </div>
        <center>
        </div>

                </section>
@endsection
