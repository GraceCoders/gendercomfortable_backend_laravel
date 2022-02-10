<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style2.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>

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
            <div class="row">
                <div class=" col-lg-2 col-12" id="second">
                    <a href="{{url('index2')}}"> <img class="img-fluid" src="{{asset('assets/slicing_web/logo.svg')}}" class="img-fluid" alt="..."></a>
                </div>
                <div class="col-lg-10 col-12" id="second">
                    <div class="buttons">
                        <button type="button" class="button1 button1-lg" data-bs-toggle="modal" data-bs-target="#exampleModal51">Get Started</button>
              <!-- Modal -->
                        <div class="modal fade" id="exampleModal51" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog " id="modal-dialog2">
                                <div class="modal-content">

                                    <div class="modal-body">

                                        <div class="container text-center">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h1>Select account type</h1>



                                                <div class="row  " id="account_row " style="display:inline-flex">
                                                    <div class=" col-lg-4 col-12 bg-light text-center " id="account_image">
                                                        <a href="{{ur;('signup_company')}}l"><img class="image" src="{{asset('assets/slicing_web/company.svg')}}" class="img-fluid" alt="..." /></a>
                                                        <p>company</p>
                                                    </div>
                                                    <div class="col-lg-4 col-12 bg-light text-center" id="account_image">
                                                        <a href="{{url('signup_employee')}}"><img class="image" src="{{asset('assets/slicing_web/employee.svg')}}" class="img-fluid" alt="..." /></a>
                                                        <p>employee</p>
                                                    </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="button" class="button2 button2-lg" data-bs-toggle="modal" data-bs-target="#exampleModal52">login</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal52" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog " id="modal-dialog2">
                                <div class="modal-content">

                                    <div class="modal-body">

                                        <div class="container text-center">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h1>Select account type</h1>



                                                <div class="row  " id="account_row " style="display:inline-flex">
                                                    <div class=" col-lg-4 col-12 bg-light text-center " id="account_image">
                                                        <a href="{{url('login')}}"><img class="image" src="{{asset('assets/slicing_web/company.svg')}}" class="img-fluid" alt="..." /></a>
                                                        <p>company</p>
                                                    </div>
                                                    <div class="col-lg-4 col-12 bg-light text-center" id="account_image">
                                                        <a href="{{url('login')}}"><img class="image" src="{{asset('assets/slicing_web/employee.svg')}}" class="img-fluid" alt="..." /></a>
                                                        <p>employee</p>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    </div>
                </div>
            </div>

        </div>

        <!-- <hr class="line "></hr> -->
    </section>
    <section class="bg-light header_border "></section>

    <!-- Third div start -->
    <div class="third-sec bg-light">
        <div class="container">
            <div class="row">
                <div class=" col-lg-6 col-12 " id="regis_sec">
                    <div class="formdiv text-center">
                        <h1 class="signuph">Signup</h1>

                        <center>
                            <div class="round_div">
                                <img class="img-fluid" src="{{asset('assets/slicing_web/add.svg')}}" alt="...">
                            </div>
                        </center>
                        <p class="learn">Learn how to feel comfortable around transgender people</p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Firstname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Lastname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating pt-30px">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label> <img class="img-fluid" id="hideimg" src="{{asset('assets/slicing_web/hide.svg')}}" alt="...">

                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Training voucher code</label>
                        </div>
                        <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout21" data-bs-toggle="modal" data-bs-target="#licenseKeyModal">Signup</button>
                        <div class="modal fade" id="licenseKeyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog        ">
                                <div class="modal-content ">
                                    <div class="modal-body ">
                                        <div class="container text-center " id="success ">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                      <h4 class=" success_heading ">Enter License Key.</h4>
                                            <p>Were you given a license key for your company's certification course? Add it to your account here to access the training.</p>
                                        </div>
                                        <div class="form-floating mb-3 ">
                                            <input type="email " class="form-control " id="floatingInput " placeholder="name@example.com ">
                                            <label for="floatingInput ">License key</label>
                                        </div>
                                        <a href="courses.html"><button class="btn btn w-100 pb-3 pt-3 " type="button " id="checkout2">Submit</button></a>
                                        <p class="back_pera ">Skip</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <p class="psw ">Already have an account? <a href="{{('login')}} ">Login</a></p>
                    </div>
                </div>

                <div class=" col-lg-6 col-12 " id="regis_sec ">
                    <img class="img-fluid " src="{{asset('assets/slicing_web/signup.svg')}} " id="signup_img " alt="... ">
                </div>
            </div>
        </div>

        </section>

        <!-- third div end -->
        <section class="purple footer-bar ">
            <div class="container ">
                <div class="footer ">
                    <p>Copyright@2021 GenderComfortable All Right Reserved &nbsp; Term and Conditions| Privacy Policy</p>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
</body>

</html>
