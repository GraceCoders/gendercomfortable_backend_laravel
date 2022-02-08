@extends('admin.layouts.main')
@section('main-container')
<!-- third -->
    <section class="bg-light home">
        <div class="container text-center ">
            <div class="row">
                <div class="col-lg-2 col-12 "><span><p class="backsp pt-3"><a href="{{url('create_course')}}"><img  class="img-fluid"  src="{{asset('assets/slicing_web/back.svg')}}"  alt="..."> </a> &nbsp;back</p>
                    </span>
                </div>
                <div class="col-lg-10 col-12">
                    <div class="centers">
                        <div class="formdiv6 text-center ">
                            <h1 class="">Create course</h1>

                            <div>
                                <small class="uploads" class="form-text"> <h1 class="lession">Lession1</h1></small>
                                <div class="form-floating mb-3 ">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput" id="lesssonName">Lesson name</label>

                                </div>
                                <div class="form-floating  ">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword" id="floatingPassword1">choose file</label> <button type="button" class="btn btn" id="inner_button" data-bs-toggle="modal" data-bs-target="#exampleModal52">Select</button>
                                  </div>
                </div>
                <p id="lession_pera" class="form-text"><small>*You need to upload atleast two lesson for publishing this course</small></p>
                <div>
                    <small class="uploads" class="form-text"> <h1 class="lession">Lession2</h1></small>
                    <div class="form-floating mb-3 ">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" id="lesssonName1">Lesson name</label>

                    </div>
                    <div class="form-floating  ">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" id="floatingPassword1">choose file</label> <button type="button" class="btn btn" id="inner_button" data-bs-toggle="modal" data-bs-target="#exampleModal52">Select</button>
                        <small id="lession_pera" class="form-text"><p>*You need to upload atleast two lesson for publishing this course</p></small>
                    </div>
                </div>

                <div>
                <small class="divide_marks pt-3" class="form-text"><img  class="img-fluid "  id="addmore" src="{{asset('assets/slicing_web/add_more.svg')}}" alt="..." > add more</small>
                    <small class="divide_marks1 pt-3" class="form-text"> You need to upload atleast two lesson for
                     publishing this course</small>

                    <a href="{{url('/create test')}}"> <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout2">Done</button></a>
                   <!-- Modal -->
                    <div class="modal fade" id="exampleModal52" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog " id="modal-dialog2">
                            <div class="modal-content">
                                 <div class="modal-body">
                              <div class="container text-center">
                                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h4>Select account type</h4>

                                        <div class="row  " id="account_row " style="display:inline-flex">
                                            <div class=" col-lg-4 col-12 bg-light text-center " id="account_image">
                                                <img class="image" src="{{asset('assets/slicing_web/pdf.svg')}}" class="img-fluid" alt="..." />
                                                <p>Pdf</p>
                                            </div>
                                            <div class="col-lg-4 col-12 bg-light text-center" id="account_image">
                                                <img class="image" src="{{asset('assets/slicing_web/vid.svg')}}" class="img-fluid" alt="..." /></a>
                                                <p>video</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    </div>
                   </div>
            </div>
        </div>
        </div>
        </div>
               </div>
</section>
    @endsection
