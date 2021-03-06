

   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Gender Comfortable</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/slicing_web/logo.svg') }}">


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
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                                                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                                                        crossorigin="anonymous">
                            </script>
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
                    <a href="{{ url('/') }}"> <img class="img-fluid" src="{{ asset('assets/slicing_web/logo.svg') }}" class="img-fluid" alt="..."></a>
                </div>
                
        <!-- <hr class="line "></hr> -->
    </section>
       <section class="bg-light header_border "></section>

    <!-- second div end -->
     <!-- Third div start -->
    <section class="third-sec bg-light">
        <div class="container">
            <div class="row">
                <div class="  col-lg-6 col-12 " id="regis_sec">
                    <div class="formdiv text-center">
                        @if (Session::get('success'))
                        <small class="alert alert-success alert-block" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                        </small>
                        @endif
                        <img class="img-fluid text-center" id="gcimg" src="{{ asset('assets/slicing_web/gc_icon.svg') }}"
                            alt="...">
                        <h1 class="loginh">Login</h1>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <p class="learn">Learn how to feel comfortable around transgender people</p>
                            <div class="form-floating mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating ">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror <label for="floatingPassword">Password</label> <img class="img-fluid"
                                    id="hideimg" src="{{ asset('assets/slicing_web/hide.svg') }}" alt="...">
                                <small id="forgot" class="form-text" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><a href="#">Forgot password</a></small>
                            </div>
                     
                            <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout21">Login</button>
                        </form>
                        <p class="psw">Dont have an account? <a href="{{route('admin.signup')}}">Sign
                                up</a></p>
                    </div>
                </div>
                <div class=" col-lg-6  col-12" id="regis_sec">
                    <img class="img-fluid" src="{{ asset('assets/slicing_web/login.svg') }}" alt="...">
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container text-center">
                            <button type="submit" class="btn-close float-end" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <h1>Forgot Password</h1>
                            <p>Don???t worry! We will send you the reset link on your mail.</p>
                            <img class="img-fluid" src="{{ asset('assets/slicing_web/signup.svg') }}" alt="...">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout2">Submit</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

