@extends('admin.layouts.main')
@section('main-container')

    <!-- Third div start -->
    <section class="bg-light">
        <div class="container text-center">
            <div class="row">
                @if (\Session::has('success'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif


                <div class="col-lg-3 col-12"></div>
                <div class="col-lg-6 col-12">
                    <center>
                        <form method="POST" action="{{ route('admin.update.password') }}">
                            @csrf
                            <div class="formdiv6 text-center mt-3 mb-3 ">
                                <h1 class="signuph">Change Password</h1>

                                <p class="changePassword" id="pass">Choose a new password for your account.</p>
                                <img class="image" src="{{ asset('assets/slicing_web/change_pass.svg') }}"
                                    class="img-fluid" alt="...">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingInput" name="old_password"
                                        required>
                                    <label for="floatingInput">Current password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="new_password" id="floatingInput"
                                        required>
                                    <label for="floatingInput">New password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="confirm_password" id="floatingInput"
                                        required>
                                    <label for="floatingInput">Re-enter new password</label>
                                </div>
                                <button class="btn btn w-100 pb-3 pt-3 " type="submit" id="checkout2">Save</button>
                        </form>
                </div>
            </div>
            <center>
        </div>
    </section>
@endsection
<script>
      setTimeout(function() {
    $('#alert').fadeOut('fast');
}, 1000);
</script>
