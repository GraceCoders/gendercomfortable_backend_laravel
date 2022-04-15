@extends('admin.layouts.main')
@section('main-container')

<!-- second div end -->
<!-- third -->
<section class="bg-light home">
    <div class="container text-center ">
        <div style="display:none;" id="myDiv" class="animate-bottom">
          </div>
        <center>
            <div class="centers">
                <div class="formdiv6 text-center ">
                    <form method="POST" action="{{route('admin.add.course')}}" enctype='multipart/form-data'>
                        @csrf
                        <h1 class="">Create course</h1>
                        <center>
                            <div class="container">
                                <label for="myfile" id="upload_label"><img class="fa fa-upload" src="{{ asset('assets/slicing_web/uploadfile.png') }}" height="5px" width="5px" alt="..." id="imgss">

                                    <span> <input type="file" accept="image/*" id="myfile" name="filename" onchange="loadFile(event)" value="upload thumbnail">
                                        <img class="img-fluid uploadimg" src=""></span>
                                </label>
                            </div>
                        </center>
                        <div class="form-floating ">
                            <input type="text" minlength="0" maxlength="64" required name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Course name</label>
                        </div>
                        <small class="divide_marks" class="form-text">0/64</small>
                        <div class="form-floating">
                            <input type="text" required maxlength="200" minlength="0" name="description" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="course_input">Course description</label>
                        </div>
                        <small class="divide_marks" class="form-text">0/200</small>
                        <div class="form-floating mb-3">
                            <input type="number" required name="price_per_seat" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput" class="course_input">Price per seat</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" required name="certificate" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Certification name</label>
                        </div>
                        <button class="btn btn w-100 pb-3 pt-3 " onclick="showPage()" type="submit" id="checkout2">Save & next</button>
                </div>
            </div>
    </div>
    </form>
    <center>
        </div>

</section>
<script>
    var loadFile = function(event) {
        var image = document.getElementById('imgss');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    function showPage() {
        HoldOn.open({
                theme: 'sk-dot',
                message: "<h4 style='color:#fff;'>Please Wait Processing.......</h4>"
            });
}
</script>
@endsection