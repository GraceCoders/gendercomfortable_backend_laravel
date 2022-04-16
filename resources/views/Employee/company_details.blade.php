@extends('Employee.layouts.main')
@section('main-container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- third  -->
<section class="bg-light">
    <div class="container" id="largeimg1">
        <div> <img class="img-fluid" class="image" id="largeimg" src="{{asset('storage/'.$user->profile_pic)}}" class="img-fluid" alt="...">
            <h4 id="heading41">{{$user->company_name}}</h4>
        </div>
    </div>
</section>
<section class="third-sec bg-light">
    <div class="container ">
        <p>{{$user->bio}}
        </p>
        <div class="row">
            <div class=" col-lg-6 col-12" id="second">
                <h3>Reviews & Ratings</h3>
            </div>
            <div class=" col-lg-6 col-12 float-end" id="second"><span>
                    <p class="donec1 float-end"><img class="img-fluid " src="{{asset('assets/slicing_web/star_sm.svg')}}" alt="..."> &nbsp;{{$avg}} ({{count($rating)}})</p>
                </span></div>
        </div>
        <div class="line"></div>
        <div class="row  ">
            <div class=" col-lg-6 col-12" id="second">
                @foreach($rating as $value)
                <div class="rating">
                    <p class="donec1 ">
                        @if($value['user']->profile_pic)
                        <img class="img-fluid" id="image_radius" src="{{asset('storage/'.$value['user']->profile_pic)}}" alt="..."> &nbsp;{{$value['user']->first_name.' '.$value['user->last_name']}}
                    </p>
                    @else
                    <img class="img-fluid" id="image_radius" src="{{ asset('assets/slicing_web/profile.png') }}" height="50xp" width="50px" alt="..."> &nbsp;{{$value['user']->first_name.' '.$value['user->last_name']}}</p>
                    @endif
                    <span>
                        <p class="donec1 rating">
                        <div class="form-group required">
                            <div class="col-sm-12">
                                <div class="rate ">

                                    <input type="radio" {{ ($value->star) == '5' ? 'checked' : '' }}  />
                                    <label for="" title="text">5 stars</label>
                                    <input type="radio" {{ ($value->star) == '4' ? 'checked' : '' }}  />
                                    <label for="" title="text">4 stars</label>
                                    <input type="radio" {{ ($value->star) == '3' ? 'checked' : '' }}  />
                                    <label for="" title="text">3 stars</label>
                                    <input type="radio" {{ ($value->star) == '2' ? 'checked' : '' }}  />
                                    <label for="" title="text">2 stars</label>
                                    <input type="radio" {{ ($value->star) == '1' ? 'checked' : '' }} />
                                    <label for="" title="text">1 star</label>
                                </div>
                            </div>
                        </div>
                        </p>
                        <br>
                    </span>
                    <p class="rating">{{$value->feed_back}}.</p>
                </div>
                @endforeach
            </div>
            <div class=" col-lg-6 col-12" id="second">
                <div class="formdiv51 float-end">
                    <form action="{{route('employee.addrating')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Share feedback</h5> <span>
                            <div class="form-floating ">

                                <p class="donec1 ">
                                <div class="form-group required">
                                    <div class="col-sm-12">
                                        <div class="rate ">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                        </div>
                                    </div>
                                </div>
                                </p>
                            </div>
                            <br>
                            <div class="form-floating ">
                                <input type="hidden" name="company_id" value="{{$user->id}}">
                                <input type="text" name="feed_back" class="form-control feed_back " id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" class="padding-star">Share your Feedback</label>
                            </div>
                    </form>
                    <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkouts">Submit</button>
                </div>
            </div>
        </div>
</section>
@endsection