@extends('company.layouts.main')
@section('main-container')
    <section class="bg-light">
        <div class="container  ">
            <div class="centers ">
                <div class="formdiv61  ">
                    <center>
                        <h1 class="signuph">Order</h1>
                    </center>
                    <form method="POST" action="{{ route('make.payment') }}">
                        @csrf
                        <input type="hidden" value={{ $data->amount }} name="amount">
                        <input type="hidden" value={{ $data->course_id }} name="course_id">
                        <h5>Order details</h5>
                        <div class="row">
                            <div class="  col-lg-4 col-12 " id="ckeck1"><img class="img-fluid" class="image"
                                    src="{{ asset('assets/slicing_web/cousre_banner.png') }}" id="checkout_img" alt="...">
                            </div>
                            <div class="  col-lg-8 col-12 " id="check1">
                                <h5>{{ $data['course']->name }}</h5>
                                <h6 class="payment_heading">{{ $data->amount }}$</h6>
                            </div>
                        </div>
                        <div class="line"></div>
                        <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
        <center>
    </section>
@endsection
