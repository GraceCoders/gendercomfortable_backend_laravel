@extends('admin.layouts.main')
@section('main-container')
 <!-- second div start -->
 <section class="bg-light">
    <div class="container">
        <div class="row ">
            <div class=" col-lg-2 col-12" id="second">
                <a href="index2.html"> <img class="img-fluid" src="{{asset('assets/slicing_web/logo.svg')}}" class="img-fluid" alt="..."></a>
            </div>
            <div class="col-lg-10 col-12" id="second">
                <div class="buttons1" style="display:inline-flex">
                    <div class="btn-group">
                        <button type="button" class="btn btn bg-light dropdown-toggle" id="dropdownMenuButton11" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <img class="image" src="{{asset('assets/slicing_web/notification.svg')}}" class="img-fluid" alt="...">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end ">
                            <li class="dropdown_position">
                                <div class="modal-heads">
                            </li>
                            <li>
                                <div class="notification">
                                    <div class=" container ">
                                        <div class="row">
                                            <div class="col-lg-2 col-12">
                                                <img class="img-fluid" id="image_radius" src="{{asset('assets/slicing_web/dummy_img3.png')}}" alt="..."></div>
                                            <div class="col-lg-10 col-12">
                                                <p class="donec1 "> Lisa Hyden has redeemed your course “Lorem ipsum dolor sit amet”
                                                </p>
                                                <p class="float-end" id="min_ago">2min .ago</p>
                                            </div>
                                        </div>
                                        <hr class="line "></hr>
                                        <div class="row mt-3">
                                            <div class="col-lg-2 col-12 ">
                                                <img class="img-fluid" id="image_radius" src="{{asset('assets/slicing_web/dummy_img1.png')}}" alt="..."></div>
                                            <div class="col-lg-10 col-12">
                                                <p class="donec1 ">John Doe has redeemed your course “Lorem ipsum dolor sit amet”
                                                </p>
                                                <p class="float-end" id="min_ago">2min .ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        </div>


                        <img class="image" src="{{asset('assets/slicing_web/profile_pic.png')}}" class="img-fluid" id="profilepic" alt="...">
                        <div class="btn-group">
                            <button type="button" class="btn btn bg-light dropdown-toggle"  id="dropdownMenuButton11" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <img class="image" src="{{asset('assets/slicing_web/dropdown.svg')}}" class="img-fluid" alt="...">
                            </button>
                            <ul class="dropdown-menu  dropdown-menu-end" id="dropdown-menu2">
                                <li class="dropdown_position">
                                    <div class="modal-heads">
                                        <div class="spacing11">
                                            <h5 class="modal-title" id="exampleModalLabel">Hello, Samuel!</h5>
                                            <a href="#" id="popup_color">
                                                <p>Activate account</p>
                                            </a>
                                        </div>
                                        <hr class="line"></hr>
                                    </div>
                                </li>
                                <div class="spacing">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('slicing_web/home.svg')}}" alt="..."> &nbsp; Home</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="edit_profile2.html">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/edit.svg" alt')}}="..."> &nbsp;&nbsp;&nbsp;Edit Profile</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="payment_option.html">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/payment.svg')}}" alt="..."> &nbsp; Payment Option</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="purchased_courses.html">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/purchased.svg')}}" alt="..."> &nbsp; Purchased Courses</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="change_password.html">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/pass.svg')}}" alt="..."> &nbsp;&nbsp;&nbsp;Change Password</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <p class="donec1"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/terms.svg')}}" alt="..."> &nbsp&nbsp;Terms&conditions</p>
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

                                        <p class="logout_popup"><a href="#">Logout</a></p>
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




    <!-- third  -->

    <section class="bg-light">
        <div class="container text-center " >

      <center>  <div class="centers">
            <div class="formdiv6 text-center ">
                            <h1 class="signuph">Edit Profile</h1>

                            <div class="plusesimg">
                                <img class="image-fluid" src="slicing_web/company_cover.png" id="profilepic2" alt="...">
                                <img class="img-fluid" id="pluspic1" src="{{asset('assets/slicing_web/plus_white.svg')}}" alt="...">
                            </div>
                            <p class="learn">Profile Pic</p>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="Samuel">
                                <label for="floatingInput">Firstname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="Doe">
                                <label for="floatingInput">Lastname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="samueldoe@xyz.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="xyz">
                                <label for="floatingInput">Company name</label>
                            </div>

                            <div class="form-floating mb-3 mt-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ">
                                <label for="floatingInput">Company bio</label>
                            </div>
                            <div class="form-floating mb-3 mt-3">
                                <input type="textarea" class="form-control" id="floatingInput" placeholder="name@example.com" value="111 Linden St
                    Yonkers, New York(NY), 10701">
                                <label for="floatingInput">Address</label>
                            </div>



                            <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout2">save</button>




                        </div>

                    </div>


        </div>
        <center>
        </div>

                </section>




    @endsection
