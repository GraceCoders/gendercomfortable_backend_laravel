@extends('company.layouts.main')
@section('main-container')

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@php
$i =1;
@endphp  
  <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class=" col-lg-8 col-12" id="largeimages">
                    <img class="img-fluid" class="image" src="{{asset('storage/'.$data->thumbnail)}}" id="details2img" alt="...">
                    <h3 class="details2heading">{{$data->name}}</h3>
                    <h4 class="details2heading1">${{$data->price_per_seat}}/seat</h4>
                </div>
                <div class="col-lg-4 col-12" id="second">
                    <div class="formdiv5 text-center">
                        <h3>Buy Course</h3>
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

        </div>

        <!-- third div end -->
        <!-- fourth div start -->

        <nav class="third-sec bg-light">
            <div class="container" id="nav_btn">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active bg-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h4>Course details</h4></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-light" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h4>Course Stats</h4></button>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active  bg-light" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container">

                    <h5>Description</h5>
                    <p class="donec">{{$data->description}}
                    </p>
                    <h5>Certification</h5>
                   @if($data['lessons'])
                    @foreach ($data['lessons'] as $value )
                    <p>Lesson {{$i++}}</p>
                    <p class="donec"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/video.svg')}}" alt="...">{{$value->lession_name}}</p>
                    @endforeach
                    @endif
                </div>
            </div>
           

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <!-- fifth section end -->
            <section class="purple footer-bar">
                <div class="container">
                    <div class="clearfix">
                        <div class="footer">
                            <p>Copyright@2021 GenderComfortable All Right Reserved &nbsp; Term and Conditions| Privacy Policy</p>
                        </div>
                    </div>
                </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
@endsection
