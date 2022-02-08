@extends('admin.layouts.main')
@section('main-container')

 <!-- Third div start -->
    <section class="bg-light">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-12"></div>
                <div class="col-lg-6 col-12">
                    <center>
                        <div class="formdiv6 text-center mt-3 mb-3 ">
                            <h1 class="signuph">Change Password</h1>

                            <p class="changePassword" id="pass">Choose a new password for your account.</p>
                            <img class="image" src="{{asset('assets/slicing_web/change_pass.svg')}}" class="img-fluid" alt="...">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Current password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">New password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Re-enter new password</label>
                            </div>
                            <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout2">change</button>




                    </div>




                </div>
                <center>
            </div>
            <div class="col-lg-3 col-12"></div>
        </div>
        </div>

    </section>
    @endsection
