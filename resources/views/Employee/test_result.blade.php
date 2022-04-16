@extends('Employee.layouts.main')
@section('main-container')
    <!-- third  -->
     <section class="bg-light">
        <div class="container text-center">
            <h1>Test Result</h1>
            <div class="fill_circle">
                <div class="circle-wrap">
                    <div class="circle">

                        <div class="mask full">
                            <div class="fill"></div>
                        </div>

                        <div class="mask half">
                            <div class="fill" ></div>
                        </div> 
                        <div class="inside-circle">
                            {{round($percentage)}}%
                        </div>

                    </div>
                </div>

                <h4 class=" success_heading">congratulations
                </h4>
                <p>You have earned a certification for this course. </p>
                <a href="{{route('create.pdf',$id)}}"><button type="button" class="btn btn btn-lg" id="download_certificate">Download certificate</button></a>
                        <p class="back_pera"><a href="{{url('employee/courses')}}" class="back_pera">Back to home</a></p>
                     </div>
                </div>
</section>
<!-- Third div start -->
@endsection
