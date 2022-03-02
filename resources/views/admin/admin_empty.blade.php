@extends('admin.layouts.main')
@section('main-container')

    <section class="sectionthird">
        <div class="home bg-light">
            <div class="container text-center ">

                <div class="home_course">
                    <h1 class="logh">Create your first course!</h1>
                    <p class="course">Welcome to Gender comfortable. You have not created any course yet. Once you
                        create a course it will shown up here.</p>
                    <img class="img-fluid" src="{{ asset('assets/slicing_web/first_course.svg') }}" alt="...">
                    <div class>
                        <a href="{{ route('admin.home') }}"><button type="button" class="btn btn btn-lg  "
                                id="radius_btn"><img class="img-fluid" id="plus_image"
                                    src="{{ asset('assets/slicing_web/plus_white.svg') }}" alt="...">&nbsp;&nbsp;Create
                                course</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
