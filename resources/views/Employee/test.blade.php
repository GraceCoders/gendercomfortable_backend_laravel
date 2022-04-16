@extends('Employee.layouts.main')
@section('main-container')
    <!-- third  -->

   <section class="bg-light">
        <div class="container-fluid" id="fluide_div">
            <div class="container">
                <form action="{{route('save.answer')}}" method="POST">
                    @csrf
                    <input type="hidden" name="course_id" value="{{$data->course_id}}">
                    <input type="hidden" name="question_id" value="{{$data->id}}">
                <div class="row">
                    <div class="col-lg-3 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <h1 class="testsheading text-center">Test</h1>
                    </div>
                    <div class="col-lg-3 col-12">
                        <h1 class="testsheadings">{{$answercount + 1}}/{{$count}}</h1>
                    </div>
                </div>
            </div>
           <div class="absolute_div text-center">
                <p>{{$data->question}}?</p>
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
                                    <input class="form-check-input" type="radio"name="answer" value="1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                             {{$data->option1}}
                            </label>
                                </div>
                                <label for="floatingInputGrid"></label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mt-3">
                                <input type="email" class="form-control" id="radio_inputs" placeholder="name@example.com">
                                <div class="form-check" id="radio_check2">
                                    <input class="form-check-input" type="radio" name="answer" value="2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                             {{$data->option2}}
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
                                    <input class="form-check-input" type="radio" name="answer" value="3"  id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                 {{$data->option3}}
                                </label>
                                </div>
                                <label for="floatingInputGrid"></label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating mt-3">
                                <input type="email" class="form-control" id="radio_inputs" placeholder="name@example.com">
                                <div class="form-check1" id="radio_check">
                                    <input class="form-check-input" type="radio" name="answer"value="4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                 {{$data->option4}}
                                </label>
                                </div>
                                <label for="floatingInputGrid"></label>
                            </div>
                        </div>
                    </div>
                   <button type="submit" class="btn btn" id="save">Submit & next</button>
                   </form>
                    </div>
                    <div class="col-lg-3 col-12" id="inputs"></div>
                </div>
            </div>
    </section>
    <!-- third div end -->
@endsection
