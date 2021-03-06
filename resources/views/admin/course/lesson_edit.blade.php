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
    @php
    $i = 1;
    @endphp
    <section class="bg-light home">
        <div class="container text-center ">
            <div class="row">
                <div class="col-lg-2 col-12 "><span>
                        <p class="backsp pt-3"><a href="{{ url('admin/edit/course',$id) }}"><img class="img-fluid"
                                    src="{{ asset('assets/slicing_web/back.svg') }}"></p> </a>
                    </span>
                </div>
                <div class="col-lg-10 col-12">
                    <div class="centers">
                        <form method="POST" action="{{ route('admin.lesson.update') }}" enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="course_id" value="{{ $id }}">
                            <div class="formdiv6  text-center " id="formdiv6">
                                <h1 class="">Edit Course</h1>
                                <div>
                                    <div class="add_more" id="add_more">

                                        @foreach ($data as $value)
                                            <div class="lession2">
                                                <small class="uploads" class="form-text">
                                                    <h1 class="lession">Lesson {{ $i++ }}</h1>
                                                </small>
                                                <input type="hidden" name="id[]" value="{{ $value->id }}" required
                                                    class="form-control" id="floatingInput"
                                                    placeholder="name@example.com">

                                                <div class="form-floating mb-3 ">
                                                    <input type="text" name="lession_name[]"
                                                        value="{{ $value->lession_name }}" required class="form-control"
                                                        id="floatingInput" placeholder="name@example.com">
                                                </div>

                                                <div class="form-floating  ">
                                                    <div class="input-group custom-file-button">
                                                        <input type="file" name="media[]" class="form-control custom-file"
                                                            id="floatingPassword">
                                                    </div>
                                                    <span class="name" id="name">{{$value->original_name}}</span>
                                                </div>
                                                <div class="form-floating  ">
                                                    <div class="input-group custom-file-button">
                                                        <small id="lession_pera" class="form-text">
                                                            <p>*You need to upload atleast two lesson for publishing this
                                                                course
                                                            </p>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <small class="divide_marks pt-3" id="add_more_div" class="form-text">
                                        <img class="img-fluid " src="{{ asset('assets/slicing_web/add_more.svg') }}"
                                             alt="..."> add more</small>
                                    <small class="divide_marks1 pt-3" class="form-text"> You need to upload atleast two
                                        lesson for
                                        publishing this course</small>
                                    <button class="btn btn w-100 pb-3 pt-3 " onclick="showPage()" type="submit"
                                        id="checkout2">Done</button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var count = <?php echo count($data); ?>;
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

    var input = document.getElementById( 'file-upload' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );

function showFileName( event ) {
  
  // the change event gives us the input it occurred in 
  var input = event.srcElement;
  
  // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
  var fileName = input.files[0].name;
  
  // use fileName however fits your app best, i.e. add it into a div
  infoArea.textContent = 'File name: ' + fileName;
}
    
</script>
