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



    <!-- fourth div start -->
    <section class="third-sec bg-light">
        <div class="container ">
            <center>
                <h3 class="heading_certification">Available courses</h3>
            </center>
            <div class="row" id="second12">
                <div class=" col-lg-4 col-12" id="second11">
                    <a href="course_details2.html"><img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover1.png')}}" class="img-fluid" alt="..."></a>
                    <p class="image_cover"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
                <div class=" col-lg-4 col-12" id="second22"> <img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover2.png')}}" class="img-fluid" alt="...">
                    <p class="image_cover1"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
                <div class=" col-lg-4 col-12" id="second31"> <img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover1.png')}}" class="img-fluid" alt="...">
                    <p class="image_cover2"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
            </div>
        </div>
    </section>
    <!-- fourth div end -->
    <!-- fifth div start -->

    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row  " id="">
                <div class=" col-lg-4 col-12" id="second21">
                    <img class="img-fluid" id="course_cover" src="{{asset('assets/slicing_web/course_cover1.png')}}" class="img-fluid" alt="...">
                    <p class="image_cover4"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
                <div class=" col-lg-4 col-12" id="second23"> <img class="img-fluid" class="image" id="course_cover" src="{{asset('assetsslicing_web/course_cover2.png')}}" class="img-fluid" alt="...">

                    <p class="image_cover5"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
                <div class=" col-lg-4 col-12" id="second33"> <img class="img-fluid" class="image" id="course_cover" src="{{asset('assets/slicing_web/course_cover1.png')}}" class="img-fluid" alt="...">


                    <p class="image_cover6"> Lorem ipsum dolor sit amet, <br>consectetur</p>
                </div>
            </div>
        </div>
    </section>
    <!-- fifth div end -->

     <!-- six section start -->

    <section class="third-sec bg-light">
        <div class="container text-center ">


                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>

                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>

                  <li class="page-item"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">9</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
        </div>

    </section>

    <!-- six div end -->

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
