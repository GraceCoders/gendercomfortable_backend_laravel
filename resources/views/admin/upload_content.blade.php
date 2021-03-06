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
                        <p class="backsp pt-3"><a href="{{ url('admin/create/course') }}"><img class="img-fluid"
                                    src="{{ asset('assets/slicing_web/back.svg') }}"></p> </a>
                    </span>
                </div>
                <div class="centers">
                    <form method="POST" action="{{ route('admin.add.lession') }}" enctype='multipart/form-data'>
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $id }}">
                        <div class="formdiv6  text-center " id="formdiv6">
                            <h1 class="">Create course</h1>
                            <div>
                                <div class="add_more" id="add_more">
                                    <div class="lession2">
                                        <small class="uploads" class="form-text">
                                            <h1 class="lession">Lesson1</h1>
                                        </small>
                                        <div class="form-floating mb-3 ">
                                            <input type="text" name="lession_name[]" required class="form-control"
                                                id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput" id="lesssonName1">Lesson name</label>
                                        </div>
                                        <div class="form-floating  ">
                                            <div class="input-group custom-file-button">
                                                <input type="file" name="media[]" class="form-control custom-file"
                                                    id="floatingPassword" placeholder="Password">

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
                                    <div class="lession2">
                                        <small class="uploads" class="form-text">
                                            <h1 class="lession">Lesson2</h1>
                                        </small>
                                        <div class="form-floating mb-3 ">
                                            <input type="text" name="lession_name[]" required class="form-control"
                                                id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput" id="lesssonName1">Lesson name</label>
                                        </div>
                                        <div class="form-floating  ">
                                            <div class="input-group custom-file-button">
                                                <input type="file" name="media[]" class="form-control custom-file"
                                                    id="floatingPassword" placeholder="Password">
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
                                    <div>
                                    </div>
                                </div>
                                <small class="divide_marks pt-3" id="add_more_div" class="form-text"> <img
                                        class="img-fluid " src="{{ asset('assets/slicing_web/add_more.svg') }}"
                                         alt="..."> add more</small>
                                <small class="divide_marks1 pt-3" class="form-text"> You need to upload atleast two
                                    lesson for
                                    publishing this course</small>
                                <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">Done</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal52" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog " id="modal-dialog2">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="container text-center">
                                                    <button type="button" class="btn-close float-end"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                    <h4>Select account type</h4>
                                                    <div class="row  " id="account_row "
                                                        style="display:inline-flex">
                                                        <div class=" col-lg-4 col-12 bg-light text-center "
                                                            id="account_image">
                                                            <img class="image" src="slicing_web/pdf.svg"
                                                                class="img-fluid" alt="..." />
                                                            <p>Pdf</p>
                                                        </div>
                                                        <div class="col-lg-4 col-12 bg-light text-center"
                                                            id="account_image">
                                                            <img class="image" src="slicing_web/vid.svg"
                                                                class="img-fluid" alt="..." /></a>
                                                            <p>video</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                                                                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                                                                        crossorigin="anonymous"></script>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var count = 2;
    $(document).ready(function() {
        $("#add_more_div").click(function() {
            count++;
            var newTextBoxDiv = $(document.createElement('div'))
         .attr("id", 'TextBoxDiv' + count);
            newTextBoxDiv.after().html(
                '<div class="lession2"><small class="uploads" class="form-text"><h1 class="lession">Lesson' +
                count +
                '</h1></small><div class="form-floating mb-3 "><input type="text" name="lession_name[]" required class="form-control" id="floatingInput"placeholder="name@example.com"><label or="floatingInput" id="lesssonName1">Lesson name</label></div> <div class="form-floating "><div class="input-group custom-file-button"><input type="file" name="media[]" class="form-control custom-file" id="floatingPassword" placeholder="Password"></div></div><div class="form-floating  "><div class="input-group custom-file-button"><small id="lession_pera" class="form-text"><p>*You need to upload atleast two lesson for publishing this course</p></small></div></div></div>'
                );
            newTextBoxDiv.appendTo("#add_more");
        });
    });

    function showPage() {
        HoldOn.open({
            theme: 'sk-dot',
            message: "<h4 style='color:#fff;'>Please Wait Processing.......</h4>"
        });
    }
</script>
