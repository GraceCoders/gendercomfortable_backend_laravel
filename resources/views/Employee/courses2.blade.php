
    @extends('employee.layouts.main')
    @section('main-container')
    <!-- Third div start -->

    <section class="bg-light ">
        <div class="container text-center " >

      <center>  <div class="centers">
            <div class="formdiv6 text-center ">
                            <h1 class="signuph">courses</h1>

                            <img class="image" src="{{asset('assets/slicing_web/course_empty.svg')}}" class="img-fluid" alt="...">

                            <p>Please enter the licese key to view your courses</p>


                            <div class="form-floating mb-3 mt-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">License key</label>
                            </div>
                            <small class="divide_marks pt-3" class="form-text"> <img  class="img-fluid "  src="{{asset('asset/slicing_web/add_more.svg')}}" alt="..." > add more</small>


                            <a href="{{url('company_courses')}}"><button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout2">Submit</button></a>

                </div>

            </div>


</div>
<center>
</div>

        </section>
@endsection

