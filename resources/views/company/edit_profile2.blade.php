@extends('company.layouts.main')
@section('main-container')
<!-- third  -->

    <section class="bg-light">
        <div class="container text-center " >

      <center>  <div class="centers">
            <div class="formdiv6 text-center ">
                            <h1 class="signuph">Edit Profile</h1>

                            <div class="plusesimg">
                                <img class="image-fluid" src="{{asset('assets/slicing_web/company_cover.png')}}" id="profilepic2" alt="...">
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
