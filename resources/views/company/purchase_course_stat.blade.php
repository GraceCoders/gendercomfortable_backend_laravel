@extends('company.layouts.main')
@section('main-container')


<!-- third section start -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class=" col-lg-8 col-12" id="largeimages">
                <img class="img-fluid" class="image" src="{{ asset('storage/' . $data->thumbnail) }}" id="details2img" alt="...">
                <h3 class="details2heading">Lorem ipsum dolor sit amet consectetur</h3>
                <h4 class="details2heading1">${{$data->price_per_seat}}/seat</h4>
            </div>
            <div class="col-lg-4 col-12" id="second">
                <div class="formdiv5 text-center">
                    <h3>Buy More Seats</h3>
                    <form method="POST" action="{{route('company.purchased.courses')}}" enctype="multipart/form-data">
                        @csrf
                        <h3 class="headingseat">${{$data->price_per_seat}}/seat</h3>
                        <div class="line"></div>
                        <p class="peraseats">Enter no. of seats you want to buy</p>
                        <div class="bg-light">
                            <div class="form-floating mb-3">
                                <input type="hidden" name="course_id" value="{{$data->id}}" class="form-control" id="floatingInput">
                                <input type="hidden" name="price_per_seat" value="{{$data->price_per_seat}}" class="form-control" id="floatingInput">
                                <input type="number" name="no_of_seat" class="form-control" id="floatingInput">
                                <label for="floatingInput">No. of seats</label>
                            </div>
                        </div>
                        <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout">Proceed to checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- third section end -->
<nav class="third-sec bg-light">
    <div class="container" id="nav_btn">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active bg-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                    <h4>Course details</h4>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg-light" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                    <h4>Course Stats</h4>
                </button>
            </li>
        </ul>
    </div>
</nav>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active  bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="container">
            <h5>Primary Card</h5>
            <div class="row  ">
                <div class=" col-lg-6 col-12" id="second4">
                    <div class="comapany1">
                        <h6>Your company’s Unique Course Access Key (Give this to employees)</h6>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <p class="headingseat">{{$data->purchase_key}} </p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <p><a href="#">Send instructional email</a></p>
                            </div>
                        </div>
                        <hr class="line">
                        </hr>
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <h6>No. of seats bought </h6>
                            </div>
                            <div class="col-lg-7 col-12">
                                <p>{{$sum}}</p>
                            </div>
                            <div class="col-lg-5 col-12">
                                <h6>No. of seats left </h6>
                            </div>
                            <div class="col-lg-7 col-12">
                                <p>{{$sum}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-6 col-12" id="second4">
                </div>
            </div>
        </div>
        <section class="third-sec bg-light">
    <div class="container ">
        <div class="margineb">
            <h5 class="secondr">Redeemed by (3)</h5>
            <div class="row  ">
                <div class=" col-lg-4 col-12" id="second4">
                    <div class="comapany1">
                        <h3>Lisa Hyden <span class="headingseat"> (Certified)</span>
                        </h3>
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <img class="img-fluid" id="radiusimages1" src="{{asset('assets/slicing_web/profile_pic.png')}}" alt="...">
                            </div>
                            <div class="col-lg-10 col-12 ">
                                <p> <strong>Redeemed on</strong>:12 April .2021</p>
                                <p><strong>Total Score:</strong>60%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-12" id="second4">
                    <div class="comapany1">
                        <h3>Lisa Hyden <span class="headingseat"> (Certified)</span></h3>
                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <img class="img-fluid" id="radiusimages1" src="{{asset('assets/slicing_web/profile_pic.png')}}" alt="...">
                            </div>
                            <div class="col-lg-10 col-12 ">
                                <p> <strong>Redeemed on</strong>:12 April .2021</p>
                                <p><strong>Total Score:</strong>80%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-12" id="second4">
                    <div class="comapany1">
                        <h3>Lisa Hyden <span class="headingseat"> (Certified)</span></h3>

                        <div class="row">
                            <div class="col-lg-2 col-12">
                                <img class="img-fluid" id="radiusimages1" src="{{asset('assets/slicing_web/profile_pic.png')}}" alt="...">
                            </div>
                            <div class="col-lg-10 col-12 ">
                                <p> <strong>Redeemed on</strong>:12 April .2021</p>
                                <p><strong>Total Score:</strong>Yet to be taken</p>
                            </div>
                        </div>
                    </div>
                </div>
</section>
    </div>
    <div class="tab-pane fade show active  bg-light" id="profile" role="tabpanel" aria-labelledby="home-tab">
    </div>
</div>
</nav>
<!-- fourth section start -->

@endsection