@extends('company.layouts.main')
@section('main-container')
 <!-- fourth section start -->
    <section class="third-sec bg-light">
        <div class="container ">
            <center>
                <h1 class="payments">Purchased courses</h1>
            </center>
            <div class="row  ">
                @foreach ($daa as $value)
                @php
                $data = DB::table('courses')->where('id',$value->id)->first();
                $purcahse =  DB::table('purchase_course')->where('course_id',$value->id)->where('user_id',Auth::id())->sum('amount');

                @endphp
                <div class=" col-lg-4 col-12" id="second">
                    <a href="{{route('purchase.course',$data->id)}}">
                <img class="img-fluid" class="image" id="course_cover" src="{{ asset('storage/' . $data->thumbnail) }}" class="img-fluid" alt="...">
                    </a>  <p>{{$data->name}}
                    </p>
                    <h4 class="payment_heading">${{$purcahse}}</h4>
                </div> 
                @endforeach
            </div>
        </div>
    </section>
    @endsection
