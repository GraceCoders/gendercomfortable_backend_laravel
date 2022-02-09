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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Third div start -->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class=" col-lg-8 col-12" id="largeimages">
                    <img class="img-fluid" class="image" src="{{asset('assets/slicing_web/cousre_banner.png')}}" id="details2img" alt="...">
                    <h3 class="details2heading">Lorem ipsum dolor sit amet consectetur</h3>
                    <h4 class="details2heading1">$120/seat</h4>
                </div>
                <div class="col-lg-4 col-12" id="second">
                    <div class="formdiv5 text-center">
                        <h3>Buy Course</h3>
                        <h3 class="headingseat">$120/seat</h3>
                        <div class="line"></div>
                        <p class="peraseats">Enter no. of seats you want to buy</p>
                        <div class="bg-light">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">No. of seats</label>
                            </div>
                        </div>
                        <a href="checkout.html"> <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout">Proceed to checkout</button></a>

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
                    <p class="donec">Donec et felis vehicula lorem ullamcorper sollicitudin sed non nulla. Pellentesque rutrum eget tellus at finibus. Mauris vel dignissim turpis. Nulla euismod laoreet tellus, et consectetur mauris laoreet id. Aenean eu laoreet lacus.
                        Sed sed iaculis ex. Fusce sed sollicitudin ipsum. Phasellus pulvinar tellus rhoncus ante vestibulum vehicula. Morbi viverra sit amet neque eu blandit. Donec quis mauris nisi. Pellentesque pellentesque magna in bibendum ultrices.
                    </p>
                    <h5>Certification</h5>
                    <p>Lesson 1</p>
                    <p class="donec"><img class="img-fluid" class="image" src="{{asset('assets/slicing_web/video.svg')}}" alt="...">Duis aute irure dolor in reprehenderit in voluptate</p>
                    <p>Lesson 2</p>
                    <p class="donec" id="donecs_pera"> <img class="img-fluid" class="image" src="{{asset('assets/slicing_web/pdf2.svg')}}" alt="..."> Duis aute irure dolor in reprehenderit in voluptate</p>

                </div>
            </div>
            <div class="tab-pane fade bg-light" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container">
                    <section class="third-sec bg-light">
                        <div class="container ">
                            <h5 class="purchase">Purchased By</h5>
                            <div class="row  ">
                                <div class=" col-lg-4 col-12">
                                    <div class="comapany1">
                                        <h3>Company 1</h3>
                                        <p>Seats purchased: 12</p>
                                        <p>Unique course access key:<br>
                                            <span id="digit_val"> 83719-58015-23641-84332-09281 </span></p>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-12">
                                    <div class="comapany1">
                                        <h3>Company 2</h3>
                                        <p>Seats purchased: 12</p>
                                        <p>Unique course access key:<br><span id="digit_val"> 83719-58015-23641-84332-09281 </span></p>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-12">
                                    <div class="comapany1">
                                        <h3>Company 3</h3>
                                        <p>Seats purchased: 12</p>
                                        <p>Unique course access key:<br><span id="digit_val"> 83719-58015-23641-84332-09281 </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <section class="third-sec bg-light">
                        <div class="container ">

                            <div class="row  ">
                                <div class=" col-lg-4 col-12" id="second1">
                                    <div class="comapany1">
                                        <h3>Company 4</h3>
                                        <p>Seats purchased: 12</p>
                                        <p>Unique course access key:<br><span id="digit_val"> 83719-58015-23641-84332-09281 </span></p>
                                    </div>
                                </div>


                                <div class=" col-lg-4 col-12" id="second1">
                                    <div class="comapany1">
                                        <h3>Company 5</h3>
                                        <p>Seats purchased: 12</p>
                                        <p>Unique course access key:<br><span id="digit_val"> 83719-58015-23641-84332-09281 </span></p>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-12" id="second1">

                                </div>
                            </div>
                    </section>
                    </div>
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
