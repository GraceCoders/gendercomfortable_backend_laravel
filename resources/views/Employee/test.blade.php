@extends('employee.layouts.main')
@section('main-container')
    <!-- third  -->
   <section class="bg-light">
        <div class="container-fluid" id="fluide_div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <h1 class="testsheading text-center">Test</h1>
                    </div>
                    <div class="col-lg-3 col-12">
                        <h1 class="testsheadings">7/10</h1>
                    </div>
                </div>
            </div>
           <div class="absolute_div text-center">
                <p>Lorem ipsum dolor sit amet consectetur?</p>
            </div>
        </div>
    </section>
       <!-- Third div start -->
<section class="bg-light">
        <div class="container " id="">
            <div class="row">
                <div class="col-lg-3 col-12" id="inputs"></div>
                <div class="col-lg-6 col-12 text-center" id="inputs">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mt-3">
                                <input type="email" class="form-control" id="radio_inputs" placeholder="name@example.com">
                                <div class="form-check" id="radio_check2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                              Default radio
                            </label>
                                </div>
                                <label for="floatingInputGrid"></label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mt-3">
                                <input type="email" class="form-control" id="radio_inputs" placeholder="name@example.com">
                                <div class="form-check" id="radio_check2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                              Default radio
                            </label>
                                </div>
                                <label for="floatingInputGrid"></label>
                            </div>
                        </div>
                    </div>
                 <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mt-3">
                                <input type="email" class="form-control" id="radio_inputs" placeholder="name@example.com">
                                <div class="form-check" id="radio_check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                  Default radio
                                </label>
                                </div>
                                <label for="floatingInputGrid"></label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mt-3">
                                <input type="email" class="form-control" id="radio_inputs" placeholder="name@example.com">
                                <div class="form-check1" id="radio_check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                  Default radio
                                </label>
                                </div>
                                <label for="floatingInputGrid"></label>
                            </div>
                        </div>
                    </div>
             <a href="{{('test_result')}}"> <button type="button" class="btn btn" id="save">Submit & next</button></a>

                    </div>
                    <div class="col-lg-3 col-12" id="inputs"></div>
                </div>
            </div>
    </section>
    <!-- third div end -->
@endsection
