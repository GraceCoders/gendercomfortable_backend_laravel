@extends('admin.layouts.main')
@section('main-container')
<!-- second div end -->
    <!-- third -->
    <section class="bg-light home">
        <div class="container text-center ">

            <center>
                <div class="centers">
                    <div class="formdiv6 text-center ">
<form method="POST" action="{{route('admin.add.course')}}"enctype='multipart/form-data'>
    @csrf
                        <h1 class="">Create course</h1>
                        <center>
                            {{-- <div class="divsround mb-3">
                            </div class="thumbnail">
                                <input name="thumbnail"  accept="image/*" type="file" required    onchange="loadFile(event)"  id="thumbnail"
                                style="width:300px; height:100px">
                                <img class="img-fluid uploadimg" src="" id="output">
                                <p class="upload_pera">Upload thumbnail</p>
                            </div> --}}
                            <!-- Upload  -->
<form id="file-upload-form" class="uploader">
    <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

    <label for="file-upload" id="file-drag">
      <img id="file-image" src="#" alt="Preview" class="hidden">
      <div id="start">
        <i class="fa fa-download" aria-hidden="true"></i>
        <div>Select a file or drag here</div>
        <div id="notimage" class="hidden">Please select an image</div>
        <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
      </div>
      <div id="response" class="hidden">
        <div id="messages"></div>
        <progress class="progress" id="file-progress" value="0">
          <span>0</span>%
        </progress>
      </div>
    </label>
  </form>
                        </center>
                        <div class="form-floating ">
                            <input type="text"  maxlength="20" required name="name" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Course name</label>
                        </div>
                        <small class="divide_marks" class="form-text">0/20</small>
                        <div class="form-floating">
                            <input type="text" required maxlength="200" minlength="20" name="description" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="course_input">Course description</label>
                        </div>
                        <small class="divide_marks" class="form-text">0/200</small>
                        <div class="form-floating mb-3">
                            <input type="number" required name="price_per_seat" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="course_input">Price per seat</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" required name="certificate" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Certification name</label>
                        </div>
                        <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">Save & next</button>
                    </div>
                </div>
        </div>
    </form>
        <center>
            </div>

    </section>
@endsection
<script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
