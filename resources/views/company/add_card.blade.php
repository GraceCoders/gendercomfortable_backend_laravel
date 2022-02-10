@extends('company.layouts.main')
@section('main-container')
    <!-- third  -->

    <section class="bg-light ">
        <div class="container  " >

      <div class="centers">
            <div class="formdiv61  ">
    <h5>Payment method</h5>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Name on card</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Card number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">MM/YYYY</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">CVV</label>
                        </div>
                        <span><p class="donec1 "><img  class="img-fluid" class="image" src="slicing_web/checkbox.svg"  alt="...">  &nbsp;Remember payment details</p>
                    <a href="{{url('payment_success')}}">  <button class="btn btn w-100 pb-3 pt-3 " type="button" id="checkout2">Checkout</button></a>
                </div>

            </div>


</div>

</div>

        </section>



@endsection
