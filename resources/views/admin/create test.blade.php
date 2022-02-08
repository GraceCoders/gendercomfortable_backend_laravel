@extends('admin.layouts.main')
@section('main-container')



    <!-- Third div start -->
    <section class="third-sec bg-light home">
        <div class="container  home">
            <div class="row">

                <div class="  col-lg-2 col-12 " id="regis_sec">
                    <span><p class="backsp"><a href="{{url('upload_content')}}"><img  class="img-fluid"  src="{{asset('assets/slicing_web/back.svg')}}"  alt="..."></a>  &nbsp;back</p></span>
                </div>
                <div class="  col-lg-8 col-12 " id="regis_sec">
                    <div class="formdiv2">
                        <center>
                            <h1 class="">Create course</h1>
                        </center>
                        <div class="row g-2 mt-3" id="sapcing">
                            <div class="col-md">
                                <h3>Ques.1</h3>
                                <div class="form-floating mt-3">


                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Question</label>
                                </div>
                            </div>

                            <div class="col-md">
                                <h3>Ques.2</h3>
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Question</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <h5 class="margintop">Correct Answer</h5>
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <h5 class="margintop">Correct Answer</h5>
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <h5 class="margintop">Wrong Answers</h5>
                                <div class="form-floating mt-3">

                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 1</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <h5 class="margintop">Wrong Answers</h5>
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 1</label>
                                </div>
                            </div>
                        </div>


                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer2</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 2</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 3</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 3</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <h3 class="margintop">Ques.3</h3>

                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Question</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <h3 class="margintop">Ques.4</h3>

                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Question</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <h5 class="margintop">Correct Answer</h5>
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <h5 class="margintop">Correct Answer</h5>
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer</label>
                                </div>
                            </div>
                        </div>


                        <div class="row g-2">
                            <div class="col-md">
                                <h5 class="margintop">Wrong Answers</h5>
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 1</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <h5 class="margintop">Wrong Answers</h5>
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 1</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 2</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 2</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer 3</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Answer</label>
                                </div>
                            </div>
                        </div>
                        <small class="divide_marks pt-3" class="form-text"> <img  class="img-fluid "  src="slicing_web/add_more.svg" alt="..." > add more</small>
                        <center> <a href="{{url('course_details')}}"><button type="button" class="btn btn-primary btn-lg  " id="buttonlarge">Publish</button></a>
                        </center>

                    </div>
                </div>

                <div class="  col-lg-2 col-12 " id=""></div>

            </div>
        </div>

    </section>

    @endsection
