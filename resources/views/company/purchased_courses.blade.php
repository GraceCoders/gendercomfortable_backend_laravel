@extends('company.layouts.main')
@section('main-container')
 <!-- fourth section start -->
    <section class="third-sec bg-light">
        <div class="container ">
            <center>
                <h1 class="payments">Purchased courses</h1>
            </center>
            <div class="row  ">
                @foreach ($data as $value)
                <div class=" col-lg-4 col-12" id="second">
                    <a href="{{route('purchase.course',$value->id)}}">
                <img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover1')}}.png" class="img-fluid" alt="...">
                    </a>  <p>{{$value['course']->name}}
                    </p>
                    <h4 class="payment_heading">${{$value['course']->price_per_seat}}</h4>
                </div> 
                @endforeach
            </div>
        </div>
    </section>
    @endsection
