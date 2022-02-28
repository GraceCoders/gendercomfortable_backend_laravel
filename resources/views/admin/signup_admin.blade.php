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
                    <a href={{ url('admin/index') }}> <img class="img-fluid"
                            src="{{ asset('assets/slicing_web/logo.svg') }}" class="img-fluid" alt="..."></a>
                </div>
                <div class="col-lg-10 col-12" id="second">
                    <div class="buttons">
                        <a href="{{ route('admin.signup') }}"> <button type="button" class="button1 button1-lg"
                                data-bs-toggle="modal" data-bs-target="#exampleModal51">Get Started</button></a>
                        <a href="{{ url('/login') }}"> <button type="button" class="button2 button2-lg"
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
    <!-- second div end -->
    <!-- Third div start -->
    <section class="third-sec bg-light">
        <div class="container">
            <div class="row">
                <div class="  col-lg-6 col-12  " id="regis_sec">
                    <div class="formdiv text-center">
                        <h1 class="signuph">Signup</h1>
                        <form action="{{ route('admin.register') }}" method="POST" enctype='multipart/form-data'>
                            @csrf
                            <center>
                                <div class="container ">

                                    <label for="myfile" id="label_img2"><img class="img-fluid" src="" alt="..."
                                            id="roundimgs">

                                        <input type="file" id="myfile" name="filename" onchange="loadFile(event)"
                                            value="upload thumbnail">
                                        <img class="img-fluid uploadimg" src=""></span>
                                    </label>
                                </div>
                                {{-- <div class="container ">

                                    <label for="myfile"><img class="img-fluid" src="slicing_web/add.svg" alt="..."id="roundimgs">
                                  </label>
                                               <input type="file" id="myfile" name="filename"
                                               value="upload thumbnail">
                                 </div> --}}
                            </center>
                            <p class="learn">Learn how to feel comfortable around transgender people</p>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="first_name" required
                                    placeholder="name@example.com">
                                <label for="floatingInput">Firstname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="last_name" required
                                    placeholder="name@example.com">
                                <label for="floatingInput">Lastname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="floatingInput" required
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating pt-30px">
                                <input type="password" name="password" class="form-control" required
                                    id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label> <img class="img-fluid" id="hideimg"
                                    src="{{ asset('assets/slicing_web/hide.svg') }}" alt="...">
                                <small id="forgot" class="form-text"><a href="#">Forgot password</a></small>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="bio" required class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput" class="bio_input">bio</label>
                            </div>
                            <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">Signup</button>
                            <p class="psw">Already have an account? <a
                                    href="{{ url('/login') }}">Login</a>
                            </p>
                    </div>
                </div>
                </form>

                <div class=" col-lg-6  col-12" id="regis_sec">
                    <img class="img-fluid" src="{{ asset('assets/slicing_web/signup.svg') }}" id="signup_img"
                        alt="...">
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('roundimgs');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
