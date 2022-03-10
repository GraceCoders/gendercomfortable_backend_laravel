@extends('company.layouts.main')
@section('main-container')
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
    <section class="bg-light">
        <div class="container  ">
            <div class="centers ">
                <div class="formdiv61  ">
                    <center>
                        <h1 class="signuph">Order</h1>
                    </center>
                
                        <input type="hidden" value="{{ $data->amount }}" name="amount">
                        <input type="hidden" value="{{ $data->course_id }}" name="course_id">
                        <h5>Order details</h5>
                        <div class="row">
                            <div class="  col-lg-4 col-12 " id="ckeck1">
                <img class="img-fluid" class="image" src="{{asset('storage/'.$data['course']->thumbnail)}}" id="checkout_img" >
                            </div>
                            <div class="  col-lg-8 col-12 " id="check1">
                                <h5>{{ $data['course']->name }}</h5>
                                <h6 class="payment_heading">{{ $data->amount }}$</h6>
                            </div>
                        </div>
                        <div class="line"></div>
                    <a href="{{ route('processTransaction',Crypt::encrypt($data->id)) }}"  >  <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout2">Checkout</button>
                    </a>        
                </div>
            </div>
        </div>
        <center>
    </section>
@endsection
