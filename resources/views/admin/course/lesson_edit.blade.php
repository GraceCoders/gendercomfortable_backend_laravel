@extends('admin.layouts.main')
@section('main-container')
<!-- third -->
<style>
    input#file {
        display: inline-block;
        width: 100%;
        padding: 120px 0 0 0;
        height: 100px;
        overflow: hidden;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 20px;
        background-size: 60px 60px;
    }
</style>


<section class="bg-light home">
    <div class="container text-center ">
        <div class="row">
            <div class="col-lg-2 col-12 "><span>
                    <p class="backsp pt-3"><a href="{{ url('admin/create/course') }}"><img class="img-fluid" src="{{ asset('assets/slicing_web/back.svg') }}"></p> </a>
                </span>
            </div>
            <div class="col-lg-10 col-12">
                <div class="centers">
                <form method="POST" action="{{ route('admin.lesson.update') }}" enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $id }}">
                        <div class="formdiv6  text-center " id="formdiv6">
                            <h1 class="">Create course</h1>
                            <div>
                                @foreach($data as $value )
                                <div class="add_more" id="add_more">
                                    <div class="lession2">
                                        <small class="uploads" class="form-text">
                                            <h1 class="lession">Lesson1</h1>
                                        </small>
                                        <input type="hidden" name="id[]" value="{{$value->id}}" required class="form-control" id="floatingInput" placeholder="name@example.com">

                                        <div class="form-floating mb-3 ">
                                            <input type="text" name="lession_name[]" value="{{$value->lession_name}}" required class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput" id="lesssonName1">Lesson name</label>
                                        </div>
                                        <div class="form-floating  ">
                                            <div class="input-group custom-file-button">
                                                <input type="file" name="media[]" class="form-control custom-file" id="floatingPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-floating  ">
                                            <div class="input-group custom-file-button">
                                                <small id="lession_pera" class="form-text">
                                                    <p>*You need to upload atleast two lesson for publishing this course
                                                    </p>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>@endforeach
                                <!-- <small class="divide_marks pt-3" id="addmore" class="form-text">
                                    <img class="img-fluid " src="{{ asset('assets/slicing_web/add_more.svg') }}" onclick="addCode()" alt="..."> add more</small>
                                <small class="divide_marks1 pt-3" class="form-text"> You need to upload atleast two
                                    lesson for
                                    publishing this course</small> -->
                                <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">Done</button>
                                <!-- Modal -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script>
    var count = 2;

    function addCode() {
        count++;
        document.getElementById("add_more").innerHTML +=
            '<div class="lession2"><small class="uploads" class="form-text"><h1 class="lession">Lesson' + count +
            '</h1></small><div class="form-floating mb-3 "><input type="text" name="lession_name[]" required class="form-control" id="floatingInput"placeholder="name@example.com"><label or="floatingInput" id="lesssonName1">Lesson name</label></div><div class="form-floating"><input type="file" name="media[]"  required class="form-control" id="floatingPassword"placeholder="Password"><label for="floatingPassword" id="floatingPassword1">choose file</label> <button type="button" class="btn btn" id="inner_button"data-bs-toggle="modal" data-bs-target="#exampleModal52">Select</button><small id="lession_pera" class="form-text"><p>*You need to upload atleast two lesson for publishing this course</p></small></div></div>';
    }
</script>