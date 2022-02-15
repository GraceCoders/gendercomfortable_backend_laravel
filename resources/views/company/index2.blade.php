<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">

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
    <section class="bg-lightn ">
        <div class="container">
            <div class="row">
                <div class=" col-lg-2 col-12" id="second">
                    <a href="{{route('admin.index')}}"> <img class="img-fluid" src="{{asset('assets/slicing_web/logo.svg')}}" class="img-fluid" alt="..."></a>
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
                                                        <a href="{{url('company/signup_company')}}"><img class="image" src="{{asset('assets/slicing_web/company.svg')}}" class="img-fluid" alt="..." /></a>
                                                        <p>company</p>
                                                    </div>
                                                    <div class="col-lg-4 col-12 bg-light text-center" id="account_image">
                                                        <a href="{{url('Employee/signup_employee')}}"><img class="image" src="{{asset('assets/slicing_web/employee.svg')}}" class="img-fluid" alt="..." /></a>
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
                                                        <a href="{{url('login2')}}"><img class="image" src="{{asset('assets/slicing_web/company.svg')}}" class="img-fluid" alt="..." /></a>
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


    <!-- second div end -->

    <!-- third div start -->
    <section class="hero-sec bg-light">
        <div class="container">

            <div class="row ">
                <div class="  col-lg-6 col-12" id="regis_sec">
                    <h1 class="hh1">Learn how to feel comfortable with other genders</h1>
                    <p class="hh">Gender Comfortable provides training and certification for businesses that teaches their employees how to feel comfortable around other genders. </p>

                    <button type="button" class="regis_button  btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal1">Register your business</button>



                </div>
                <div class=" col-lg-6 col-12" id="regis_sec">
                    <img class="img-fluid" src="{{asset('assets/slicing_web/hero_img.svg')}}" alt="...">
                </div>

            </div>
        </div>
    </section>
    <!-- third div end -->
    <!-- fourth div start -->
    <section class="sec4">
        <div class="container">
            </center>
            <div class="google_fonts ">
                <div class="row">
                    <div class="col-lg-2 col-12">
                        <a href=""><img class="img-fluid" src="{{asset('assets/slicing_web/google.png')}}" alt="..."></a>
                    </div>
                    <div class="col-lg-3 col-12">
                        <a href=""><img class="img-fluid" src="{{asset('assets/slicing_web/accenture.png')}}" alt="..."></a>
                    </div>
                    <div class="col-lg-2 col-12">
                        <a href=""><img class="img-fluid" src="{{asset('assets/slicing_web/apple.png')}}" alt="..."></a>
                    </div>
                    <div class="col-lg-3 col-12">
                        <a href=""><img class="img-fluid" src="{{asset('assets/slicing_web/accenture.png')}}" alt="..."></a>
                    </div>
                    <div class="col-lg-2 col-12">
                        <a href=""><img class="img-fluid" src="{{asset('assets/slicing_web/google.png')}}" alt="..."></a>
                    </div>
                </div>
            </div>
            </center>
            <div class="row">
                <div class="col-lg-6 col-12" id="fourth_sec"> <img class="img-fluid" src="{{asset('assets/slicing_web/illus.svg')}}" id="imgg12" alt="..."> </div>
                <div class="col-lg-6 col-12" id="fourth_sec">
                    <div class="row" id="img22">
                        <div class="col-md-2 col-12" id="imgs"> <img class="image" src="{{asset('assets/slicing_web/courses.svg')}}" class="img-fluid" id="" alt="..."></div>
                        <div class="col-md-10 col-12" id="heading1">
                            <h1 class="heading">Vedio & Text based courses </h1>
                            <p class="pera">Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris.</p>
                        </div>
                        <div class="col-lg-2 col-12" id="imgs"> <img class="image" src="{{asset('assets/slicing_web/test.svg')}}" class="img-fluid" id="img2" alt="..."></div>
                        <div class="col-lg-10 col-12" id="heading1">
                            <h1 class="heading"> Take tests for evaluation</h1>
                            <p class="pera">Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris.</p>
                        </div>
                        <div class="col-lg-2 col-12" id="imgs"> <img class="image" src="{{asset('assets/slicing_web/certificate.svg')}}" class="img-fluid" id="img2" alt="..."></div>
                        <div class="col-lg-10 col-12" id="heading1">
                            <h1 class="heading">Earn Certification</h1>
                            <p class="pera">Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fourth div end -->
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
