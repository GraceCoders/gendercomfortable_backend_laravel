@extends('company.layouts.main')
@section('main-container')
<!-- third  -->

    <section class="bg-light">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-12"></div>
                <div class="col-lg-6 col-12">
                    <center>
                        <div class="centers">
                            <div class="formdiv6 text-center">

                                <img class="img-fluid mb-3" id="" src="{{asset('asset/slicing_web/success.svg')}}" alt="...">
                                <h1 class="payment_heading">$720</h1>

                                <h4 class=" success_heading">Payment successful
                                </h4>
                                <p class="perat">Congratulations! your order is successfully placed. You have purchased 12 seats and your unique course access key is
                                    <p class="perat1">83719-58015-23641-84332-09281</p>

                                    <h5 class="back_pera1"><a href="{{url('company_home')}}">Go back to home</a></h5>
                </div>
                  </div>
                        <center>
                </div>
                <div class="col-lg-3 col-12">></div>
            </div>
        </div>

    </section>
@endsection