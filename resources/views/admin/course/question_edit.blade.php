@extends('admin.layouts.main')
@section('main-container')
@php 
$i=1;
@endphp
<!-- Third div start -->
<section class="third-sec bg-light home">
    <div class="container  home">
        <div class="row">
            <div class="  col-lg-2 col-12 " id="regis_sec">
                <span>
                    <p class="backsp"><img class="img-fluid" src="{{ asset('assets/slicing_web/back.svg') }}" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal52"> Back</p>
                </span>
            </div>
            <div class="  col-lg-8 col-12 " id="regis_sec">
                <div class="formdiv2">
                    <center>
                        <h1 class="">Create course</h1>
                    </center>
                    <form method="POST" action="{{ route('admin.question.update') }}" id="savetodraft">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $id }}">

                        <div class="row" id="add_more">
                            @foreach($data as $value)
                            <input type="hidden" name="id[]" value="{{ $value->id }}">

                            <div class="col-md-6">
                                <h3>Ques.{{$i++}}</h3>
                                <div class="form-floating mt-3">
                                    <input type="text" required name="question[]" class="form-control bg-light" value="{{$value->question}}" id="floatingInputGrid" placeholder="name@example.com">
                                    <label for="floatingInputGrid">Question</label>
                                </div>
                                <strong>
                                    <p>Correct Answer</p>
                                </strong>
                                <div class="form-floating mt-3">
                                    <Select required name="right_answer[]" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                                        <option value=""></option>
                                        <option value="1" {{ ($value->right_answer) == 1 ? 'selected' : '' }}>Option1</option>
                                        <option value="2" {{ ($value->right_answer) == 2 ? 'selected' : '' }}>Option2</option>
                                        <option value="3" {{ ($value->right_answer) == 3 ? 'selected' : '' }}>Option3</option>
                                        <option value="4" 
                                        {{ ($value->right_answer) == 4 ? 'selected' : '' }}>Option4</option>
                                    </Select>
                                    <label for="floatingInputGrid">Answer</label>
                                </div>
                                <strong>
                                    <p>Wrong Answers</p>
                                </strong>
                                <div class="form-floating mt-3">
                                    <input type="text" required name="option1[]" class="form-control" value="{{$value->option1}}" id="floatingInputGrid">
                                    <label for="floatingInputGrid">Answer1</label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="text" required name="option2[]" class="form-control" value="{{$value->option2}}" id="floatingInputGrid">
                                    <label for="floatingInputGrid">Answer2</label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="text" required name="option3[]" class="form-control" value="{{$value->option3}}" id="floatingInputGrid">

                                    <label for="floatingInputGrid">Answer3</label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="text" required name="option4[]" class="form-control" value="{{$value->option4}}" id="floatingInputGrid">
                                    <label for="floatingInputGrid">Answer4</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- <small class="divide_marks pt-3" class="form-text"> <img class="img-fluid " src="{{ asset('assets/slicing_web/add_more.svg') }}" onclick="addCode()" alt="...">
                            add
                            more</small> -->
                        <center><button type=" submit" class="btn btn-primary btn-lg  " value="0" name="draft" id="buttonlarge">Publish</button>
                            <button type=" submit" value="1" name="draft" class="btn btn-primary btn-lg  " id="buttonlarge">Draft</button>
                        </center>
                    </form>
                </div>
            </div>
            <div class="  col-lg-2 col-12 " id=""></div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal52" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " id="modal-dialog2">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container text-center">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4>You want to save in draft</h4>
                    <button type="submit" id="popup_test" class="btn popup_test btn btn-lg">yes</button>
                    <button type="submit" id="popup_test" class="btn btn- btn-lg  ">No</button>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</div>


@endsection
<script>
    var count = 2;

    function addCode() {
        count++;
        document.getElementById("add_more").innerHTML +=
            '   <div class="col-md-6"><h3>Ques.' + count + '</h3><div class="form-floating mt-3">   <input type="text"  required name="question[]" class="form-control bg-light" id="floatingInputGrid"placeholder="name@example.com"><label for="floatingInputGrid">Question</label></div><strong><p>Correct Answer</p></strong><div class="form-floating mt-3"><Select name="right_answer[]" class="form-control" id="floatingInputGrid"placeholder="name@example.com"><option value=""></option><option value="1">Option1</option><option value="2">Option2</option><option value="3">Option3</option><option value="4">Option4</option></Select><label for="floatingInputGrid">Answer</label></div><strong><p>Wrong Answers</p></strong><div class="form-floating mt-3">   <input type="text"  required name="option1[]" class="form-control" id="floatingInputGrid"><label for="floatingInputGrid">Answer1</label></div><div class="form-floating mt-3">   <input type="text"  required name="option2[]" class="form-control" id="floatingInputGrid"><label for="floatingInputGrid">Answer2</label></div><div class="form-floating mt-3">   <input type="text"  required name="option3[]" class="form-control" id="floatingInputGrid"><label for="floatingInputGrid">Answer3</label></div><div class="form-floating mt-3">   <input type="text"  required name="option4[]" class="form-control" id="floatingInputGrid"><label for="floatingInputGrid">Answer4</label></div></div>'
    }
</script>