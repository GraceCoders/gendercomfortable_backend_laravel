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
            <div class=" col-lg-2 col-12" id="second">
                <a href="{{route('employee.home')}}"> <img class="img-fluid" src="{{asset('assets/slicing_web/logo.svg')}}" class="img-fluid" alt="..."></a>
            </div>
            <div class="col-lg-10 col-12" id="second">
                <div class="buttons1" style="display:inline-flex">
                    <div class="btn-group">
                        <button type="button" class="btn btn bg-light dropdown-toggle" id="dropdownMenuButton11" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <img class="image" src="{{asset('assets/slicing_web/notification.svg')}}" class="img-fluid" alt="...">
                        </button>

                        </div>
                 <img class="image-fluide" src="{{ asset('storage/' . $user->profile_pic) }}"
                            class="img-fluid" id="profilepic" alt="...">
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
                                        <a class="dropdown-item" href="{{url('certification')}}">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/certification.svg')}}" alt="..."> &nbsp;&nbsp;Certifications</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{url('change_password')}}">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/card.svg')}}" alt="..."> &nbsp;&nbsp;Change Password</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/terms.svg')}}" alt="..."> &nbsp;&nbsp;Terms&conditions</p>
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
