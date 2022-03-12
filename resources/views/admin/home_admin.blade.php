@extends('admin.layouts.main')
@section('main-container')
<!-- second div start -->

<!-- Third div start -->
<section class="third-sec bg-light">
    <div class="container " id="nav_btn">
       <!-- <div class="row" > -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active bg-light" id="published" data-bs-toggle="tab" type="button" role="tab" aria-controls="home" aria-selected="true">
                    <h4>Published</h4>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link bg-light" id="draft" data-bs-toggle="tab" type="button" role="tab" aria-controls="profile" aria-selected="false">
                    <h4>Drafts</h4>
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
        <a href="{{ route('admin.coures.view') }}"><button type="button" class="btn btn btn-lg float-end " id="radius_btn12"> <img class="img-fluid" id="plus_image" src="{{ asset('assets/slicing_web/plus_white.svg') }}" alt="...">&nbsp;&nbsp;create
                course</button></a>
    </div>
</section>
<!-- third div end -->
<!-- fourth div start -->
<section class="third-sec bg-light">
    <div class="container ">
        <div class="row publish" id="second12">
            @foreach ($course as $value)
            <div class=" col-lg-4 col-12" id="second11">
                <a href="{{ route('admin.publish.course',$value->id) }}"><img class="img-fluid" class="image" id="course_cover" src="{{asset('storage/'.$value->thumbnail)}}" class="img-fluid" alt="..."></a>
                <p class="image_cover"> {{$value->name}} <br>{{$value->description}}</p>
            </div>
            @endforeach
            {{$course->links('pagination::bootstrap-4')}}
        </div>
        <div class="row draft" id="second12">
            @foreach ($draft as $value)
            <div class=" col-lg-4 col-12" id="second11">
                <a href="{{ route('admin.publish.course',$value->id) }}"><img class="img-fluid" class="image" id="course_cover" src="{{asset('storage/'.$value->thumbnail)}}" class="img-fluid" alt="..."></a>
                <p class="image_cover"> {{$value->name}} <br>{{$value->description}}</p>
            </div>
            @endforeach
            {{$draft->links('pagination::bootstrap-4')}}
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $(".draft").hide();

        $("#published").click(function() {
            $(".publish").show();
            $(".draft").hide();

        });
        $("#draft").click(function() {
            $(".draft").show();
            $(".publish").hide();
        });
    });
</script>
@endsection
