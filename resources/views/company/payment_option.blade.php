@extends('admin.layouts.main')
@section('main-container')
   <!-- second div start -->
   <section class="bg-light">
    <div class="container">
        <div class="row ">
            <div class=" col-lg-2 col-12" id="second">
                <a href="index2.html"> <img class="img-fluid" src="slicing_web/logo.svg" class="img-fluid" alt="..."></a>
            </div>
            <div class="col-lg-10 col-12" id="second">
                <div class="buttons1" style="display:inline-flex">
                    <div class="btn-group">
                        <button type="button" class="btn btn bg-light dropdown-toggle" id="dropdownMenuButton11" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <img class="image" src="slicing_web/notification.svg" class="img-fluid" alt="...">
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
                                                <img class="img-fluid" id="image_radius" src="slicing_web/dummy_img3.png" alt="..."></div>
                                            <div class="col-lg-10 col-12">
                                                <p class="donec1 "> Lisa Hyden has redeemed your course “Lorem ipsum dolor sit amet”
                                                </p>
                                                <p class="float-end" id="min_ago">2min .ago</p>
                                            </div>
                                        </div>
                                        <hr class="line "></hr>
                                        <div class="row mt-3">
                                            <div class="col-lg-2 col-12 ">
                                                <img class="img-fluid" id="image_radius" src="slicing_web/dummy_img1.png" alt="..."></div>
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
<img class="image" src="slicing_web/profile_pic.png" class="img-fluid" id="profilepic" alt="...">
                        <div class="btn-group">
                            <button type="button" class="btn btn bg-light dropdown-toggle"  id="dropdownMenuButton11" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <img class="image" src="slicing_web/dropdown.svg" class="img-fluid" alt="...">
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
                                            <p class="donec1"><img class="img-fluid" class="image" src="slicing_web/home.svg" alt="..."> &nbsp; Home</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="edit_profile2.html">
                                            <p class="donec1"><img class="img-fluid" class="image" src="slicing_web/edit.svg" alt="..."> &nbsp;&nbsp;&nbsp;Edit Profile</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="payment_option.html">
                                            <p class="donec1"><img class="img-fluid" class="image" src="slicing_web/payment.svg" alt="..."> &nbsp; Payment Option</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="purchased_courses.html">
                                            <p class="donec1"><img class="img-fluid" class="image" src="slicing_web/purchased.svg" alt="..."> &nbsp; Purchased Courses</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="change_password.html">
                                            <p class="donec1"><img class="img-fluid" class="image" src="slicing_web/pass.svg" alt="..."> &nbsp;&nbsp;&nbsp;Change Password</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <p class="donec1"><img class="img-fluid" class="image" src="slicing_web/terms.svg" alt="..."> &nbsp&nbsp;Terms&conditions</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <p class="donec1"><img class="img-fluid" class="image" src="slicing_web/privacy.svg" alt="..."> &nbsp;&nbsp;Privacy Policy</p>
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


    <!-- third section start -->
    <section class="third-sec bg-light">
        <div class="container ">

            <div class="row  ">

                <div class=" col-lg-4 col-12" id="second"></div>
                <center>
                    <h3 class="paments">Payment options</h3>
                </center>
                <div class=" col-lg-4 col-12" id="second">

                    <div class="buttons">

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- third section end -->

    <section class="third-sec bg-light">
        <div class="container">
            <h5>Primary Card</h5>
            <div class="row  ">

                <div class=" col-lg-4 col-12" id="second5">
                    <div class="comapany1">

                        <img class="img-fluid" class="image" src="slicing_web/visa.svg" alt="...">
                        <p>ICICI Bank Debit Card ****2034</p>
                        <p>John Doe</p>
                        <p>Expires 03/23 </p>
                        <span><p class="donec1 float-end"><img  class="img-fluid" class="image" src="slicing_web/del2.svg"  alt="...">  &nbsp;Edit</p> <p class="donec1 float-end"><img  class="img-fluid" class="image" src="slicing_web/edit2.svg"  alt="..."> &nbsp;Delete</p></span>
                    </div>
                </div>
                <div class=" col-lg-8 col-12" id="second4">

                </div>

            </div>
        </div>
        </div>
    </section>




    <!-- fourth section start -->
    <section class="third-sec bg-light">
        <div class="container ">
            <div class="margineb">
                <h5 class="secondr">Secondary Card</h5>
                <div class="row  ">
                    <div class=" col-lg-4 col-12" id="second4">
                        <div class="comapany1">
                            <img class="img-fluid" class="image" src="slicing_web/visa.svg" alt="...">
                            <p>ICICI Bank Debit Card ****2034</p>
                            <p>John Doe</p>
                            <p>Expires 03/23 </p>
                            <span><p class="donec1 float-end"><img  class="img-fluid" class="image" src="slicing_web/del2.svg"  alt="...">  &nbsp;Edit</p> <p class="donec1 float-end"><img  class="img-fluid" class="image" src="slicing_web/edit2.svg"  alt="..."> &nbsp;Delete</p></span>
                        </div>
                    </div>


                    <div class=" col-lg-4 col-12" id="second4">
                        <div class="comapany1">
                            <img class="img-fluid" class="image" src="slicing_web/visa.svg" alt="...">
                            <p>ICICI Bank Debit Card ****2034</p>
                            <p>John Doe</p>
                            <p>Expires 03/23 </p>
                            <span><p class="donec1 float-end"><img  class="img-fluid" class="image" src="slicing_web/del2.svg"  alt="...">  &nbsp;Edit</p> <p class="donec1 float-end"><img  class="img-fluid" class="image" src="slicing_web/edit2.svg"  alt="..."> &nbsp;Delete</p></span>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-12">
                        <div class="comapany12 text-center">
                           <a href="add_payment.html"> <img class="image-fluid" src="slicing_web/add_grey.svg" class="img-fluid" alt="..."></a>
                            <p class="gray">Add new card</p>
                        </div>
                    </div>
                </div>
    </section>
    <!-- fourth div end -->

    <!-- fifth div start -->


    <!-- fifth div end -->



    @endsection
