@extends('Employee.layouts.main')
@section('main-container')
<!-- Third div start -->

<section class="bg-light ">
    <div class="container text-center ">
        <center>
            <div class="centers">
           
                <div class="formdiv6 text-center ">
                    <h1 class="signuph">courses</h1>
                    <form method="POST" action="{{route('add.license')}}">
                        @csrf
                        <img class="image" src="{{asset('assets/slicing_web/course_empty.svg')}}" class="img-fluid" alt="...">
                        <p>Please enter the licese key to view your courses</p>
                        <div class="add_more" id="add_more">
                            <div class="form-floating mb-3 mt-3 ">
                                <input type="text" name="license_key[]" required class="form-control">
                                <label for="floatingInput">License key</label>
                                
                            </div>
                            @if (Session::get('danger'))
                                    <small class="alert alert-danger form-control alert-block" role="alert">
                                        <strong>{{ Session::get('danger') }}</strong>
                                    </small>
                                @endif
                        </div>
                        <small class="divide_marks pt-3" class="form-text">
                            <img class="img-fluid " src="{{asset('assets/slicing_web/add_more.svg')}}" onclick="addCode()" alt="..."> add more</small>
                        <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">Submit</button>
                    </form>
                </div>
            </div>
    </div>
    <center>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
$(document).ready(function(){
    setTimeout(function() {
        $(".alert-block").hide('blind', {}, 500)
    }, 5000);
});

    function addCode() {
        document.getElementById("add_more").innerHTML +=
            '<div class="form-floating mb-3 mt-3 "><input type="text" name="license_key[]"  class="form-control"><label for="floatingInput">License key</label></div>'
    }
 
</script>