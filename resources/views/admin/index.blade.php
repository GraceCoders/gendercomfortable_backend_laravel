<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <section class="purple top-bar">
        <div class="container">
            <div class="clearfix">
                <div class="float-end">
                    <a href=""> <img class="image-fluid" src="{{ asset('assets/slicing_web/mail.svg') }}"
                            class="img-fluid" alt="..."></a>
                    </a>




                    <p>support@gendercomfortable.com</p>
                    <a href=""><img class="image-fluid" src="{{ asset('assets/slicing_web/fb.svg') }}"
                            class="img-fluid" alt="..."></a>
                    <a href=""><img class="image-fluid" src="{{ asset('assets/slicing_web/insta.svg') }}"
                            class="img-fluid" alt="..."></a>
                    <a href=""><img class="image-fluid" src="{{ asset('assets/slicing_web/linkedin.svg') }}"
                            class="img-fluid" alt="...">
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
                    <a href="{{route('admin.signup')}}"> <img class="img-fluid"
                            src="{{ asset('assets/slicing_web/logo.svg') }}" class="img-fluid" alt="..."></a>
                </div>
                <div class="col-lg-10 col-12" id="second">
                    <div class="buttons">
                        <a href="{{route('admin.signup')}}"> <button type="button" class="button1 button1-lg"
                                data-bs-toggle="modal" data-bs-target="#exampleModal51">Get Started</button></a>
                        <a href="{{ url('/user/login') }}"> <button type="button" class="button2 button2-lg"
                                data-bs-toggle="modal" data-bs-target="#exampleModal52">login</button></a>
                    </div>
                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        </div>
        </div>
        </div>

        </div>

        <!-- <hr class="line "></hr> -->
    </section>
    <section class="bg-light header_border "></section>
    <section class="one">
        <div class="container">
            <center> <a class="oneheading" href="{{ url('/company.index2') }}">
                    <h4 class="oneheading mb-3">Employee/Business Login <a class="oneheading"
                            href="{{route('admin.signup')}}">/admin</h4>
                </a></center>
        </div>
    </section>
    <section class="two">
        <div class="container text-center">
            <h5 class="mt-3">Find Gender confortable certified businesses</h5>
        </div>
    </section>
    <section class="three">
        <div class="container">
            <center>
                <div class="buttonshome" style="display:inline-flex">
                    <div class="dropdown " id="dropdowns1">
                        <button class="btn btn-bg-light dropdown-toggle" type="button" id="dropdownMenuButton15"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Business Type/Category
                        </button>
                        <ul class="dropdown-menu" id="dropdown-menu1" aria-labelledby="dropdownMenuButton15">
                            <li><a class="dropdown-item" href="#">Retail</a></li>
                            <li><a class="dropdown-item" href="#">Shoes </a></li>
                            <li><a class="dropdown-item" href="#">Clothing</a></li>
                            <li><a class="dropdown-item" href="#">Entertainment</a></li>
                            <li><a class="dropdown-item" href="#">Lingerie</a></li>
                        </ul>
                    </div>
                    <button type="button" class="button button-lg" id="filter">Filter</button>
                </div>
            </center>
        </div>
    </section>
    <section class=" container maps">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d27442.509736962715!2d76.67859789146954!3d30.709579825276915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smohali%2074%20sector%20phase%208b!5e0!3m2!1sen!2sin!4v1641465167922!5m2!1sen!2sin"
            width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <section class="">
        <div class="container">
        </div>
        <section>
            <div class="container">
                <center>
                    <h6 class="colorsgray">There are 9 gender confortable in the current search area is there is a
                        business you like to see on this map ? click here for information you can send them for becoming
                        certified</h6>
                </center>
            </div>
        </section>
    </section>
</body>

</html>
