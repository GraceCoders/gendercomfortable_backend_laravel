@extends('company.layouts.main')
@section('main-container')
<!-- third  -->
<section class="bg-light home">
        <div class="container  " >
        <div class="centers">
            <div class="formdiv61  ">
            <center>
                            <h1 class="signuph">Order</h1>
                        </center>
                    <h5>Order details</h5>
                        <div class="row">
                            <div class="  col-lg-4 col-12 " id="ckeck1"><img class="img-fluid" class="image" src="{{asset('storage/'.$data->thumbnail)}}" id="checkout_img" alt="..."></div>
                            <div class="  col-lg-8 col-12 " id="check1">
                                <h5>Duis aute irure dolor in reprehenderit X 20 (seats)</h5>
                                <h6 class="">$120/seat</h6>
                            </div>
                        </div>
                        <div class="line"></div>
                        <h5>Payment method</h5>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Name on card</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Card number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">MM/YYYY</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">CVV</label>
                        </div>
                        <span><p class="donec1 "><img  class="img-fluid" class="image" src="{{asset('assets/slicing_web/checkbox.svg')}}"  alt="...">  &nbsp;Remember payment details</p>
                    <a href="{{url('payment_success')}}">  <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout2">Checkout</button></a>
                 </div> </div>


</div>

</div></section>

@endsection
