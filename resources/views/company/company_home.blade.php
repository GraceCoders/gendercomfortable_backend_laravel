@extends('company.layouts.main')
@section('main-container')
    <section class="third-sec bg-light">
        <div class="container ">
            <center>
                <h3 class="heading_certification">Available courses</h3>
            </center>
            <div class="row" id="second12">
                @foreach ($data as $value)
                    <div class=" col-lg-4 col-12" id="second11">
                        <a href="{{ route('course.detail', Crypt::encrypt($value->id)) }}"><img class="img-fluid"
                                class="image" id="course_cover"
                                src="{{ asset('assets/slicing_web/course_cover1.png') }}" class="img-fluid"
                                alt="..."></a>
                        <p class="image_cover">{{ $value->name }} <br>{{ $value->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="third-sec bg-light">
        <div class="container text-center ">
            {{ $data->links('pagination::bootstrap-4') }}
        </div>
    </section>
@endsection
