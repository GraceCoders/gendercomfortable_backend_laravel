<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Gender Comfortable</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/slicing_web/logo.svg') }}">


    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
@php
$user = Auth::user();
@endphp
<body>
    <section class="purple top-bar">
        <div class="container">
            <div class="clearfix">
                <div class="float-end">
                    <a href=""> <img class="image" src="{{asset('assets/slicing_web/mail.svg')}}" class="img-fluid" alt="..."></a>
                    </a>
                    <p>support@gendercomfortable.com</p>
                    <a href=""><img class="image" src="{{asset('assets/slicing_web/fb.svg')}}" class="img-fluid" alt="..."></a>
                    <a href=""><img class="image" src="{{asset('assets/slicing_web/insta.svg')}}" class="img-fluid" alt="..."></a>
                    <a href=""><img class="image" src="{{asset('assets/slicing_web/linkedin.svg')}}" class="img-fluid" alt="...">
                    </a>
                </div>
            </div>
        </div>
    </section>
 <!-- second div start -->
 <section class="bg-light">
    <div class="container">
    <div class="row ">
    <!-- <center><a href="{{route('employee.home')}}"><h3 class="back-link">Sreach GenderComfortable</h3></a></center> -->

            <div class=" col-lg-2 col-12" id="second">
                <a href="{{route('employee.home')}}"> <img class="img-fluid" src="{{asset('assets/slicing_web/logo.svg')}}" class="img-fluid" alt="..."></a>
            </div>
            <div class=" col-lg-7 col-12" id="second">
                    <center><a href="{{url('/employee/search')}}"><h3 class="back-link">Sreach GenderComfortable</h3></a></center>

</div>
            <div class="col-lg-3 col-12" id="second">

                <div class="buttons1" style="display:inline-flex">
                    <div class="btn-group">
                        <button type="button" class="btn btn bg-light dropdown-toggle" id="dropdownMenuButton11" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <img class="image" src="{{asset('assets/slicing_web/notification.svg')}}" class="img-fluid" alt="...">
                        </button>

                        </div>
                        @if( $user->profile_pic)
                        <img class="image-fluide" src="{{ asset('storage/' . $user->profile_pic) }}"
                            class="img-fluid" id="profilepic" alt="...">      
                                                    @else
                              <img class="img-fluid" src="{{ asset('assets/slicing_web/profile.png') }}" class="img-fluid" id="profilepic" alt="..." id="roundimgs">
                              @endif 
                        <div class="btn-group">
                            <button type="button" class="btn btn bg-light dropdown-toggle"  id="dropdownMenuButton11" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <img class="image" src="{{asset('assets/slicing_web/dropdown.svg')}}" class="img-fluid" alt="...">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end " id="dropdown-menu2">
                                <li class="dropdown_position">
                                    <div class="modal-heads">
                                        <div class="spacing11">
                                            <h5 class="modal-title" id="exampleModalLabel">Hello, {{$user->fisrt_name.' '.$user->last_name}}!</h5>
                                           
                                        </div>
                                        <hr class="line"></hr>
                                    </div>
                                </li>
                                <div class="spacing">
                                    <li>
                                        <a class="dropdown-item" href="{{route('employee.home')}}">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/home.svg')}}" alt="..."> &nbsp; Home</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('employee.edit.profile') }}">
                                            <p class="donec1"><img class="img-fluid" id="edit_img"
                                                    src="{{ asset('assets/slicing_web/edit.svg') }}"
                                                    alt="...">&nbsp;&nbsp;&nbsp;&nbsp;Edit Profile</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('employee/courses')}}">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/purchased.svg')}}" alt="..."> &nbsp;Courses</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('employee/certification')}}">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/certification.svg')}}" alt="..."> &nbsp;Certifications</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('change_password')}}">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/card.svg')}}" alt="..."> &nbsp;Change Password</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/terms.svg')}}" alt="..."> &nbsp;Terms&conditions</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/privacy.svg')}}" alt="..."> &nbsp;&nbsp;Privacy Policy</p>
                                        </a>
                                    </li>

                                </div>
                                <hr class="line"></hr>
                                <li>
                                    <div class="modal-footers text-center ">
                                        <p class="logout_popup">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                                Logout
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        </span>
                    </div>
                </div>
            </div>

        </div>
</section>
<section class="bg-light header_border "></section>

    <!-- third section start -->
    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row  ">

                <div class=" col-lg-4 col-12" id="second"></div>
                <div class=" col-lg-4 col-12" id="second">
                    <center>
                        <h3>courses</h3>
                    </center>
                </div>
                <div class=" col-lg-4 col-12" id="second">

                    <div class="buttons">
                        <a href="{{ url('/employee/license') }}">
                            <button type="button" class="btn btn btn-lg  " id="radius_btn1"> <img class="img-fluid"
                                    id="plus_image" src="{{asset('assets/slicing_web/plus_white.svg')}}" alt="...">&nbsp;&nbsp;Add license
                                key</button></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- third section end -->


    <!-- fourth section start -->
    <section class="third-sec bg-light">
    @if (Session::get('success'))
   <small class="alert alert-success form-control alert-block" role="alert">
   <strong>{{ Session::get('success') }}</strong>
  </small>
  @endif
        <div class="container ">

            <div class="row " id="second12">
              @foreach($data as $value)
                <div class=" col-lg-4 col-12" id="second11">
                    <img class="img-fluid" class="image" id="course_cover"
                        src="{{asset('storage/'.$value->profile_pic)}}" class="img-fluid" alt="...">
                    <h3 class="image_covers">{{$value->company_name}}</h3>
                    <p class="image_coversp"><a href="{{ route('employee.coursedetails',$value->id) }}">View courses</a></p>
                </div>
               @endforeach
            </div>
        </div>
  <!-- fifth start -->
  <section class="purple footer-bar">
    <div class="container">
        <div class="footer">
            <p>Copyright@2021 GenderComfortable All Right Reserved &nbsp; Term and Conditions| Privacy Policy</p>
        </div>
    </div>
</section>
<!-- fifth End -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).ready(function(){
    setTimeout(function() {
        $(".alert-block").hide('blind', {}, 500)
    }, 5000);
})
</script>
