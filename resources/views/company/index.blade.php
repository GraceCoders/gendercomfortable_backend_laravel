@extends('admin.layouts.main')
@section('main-container')
    <section class="one">
        <div  class="container">
           <center> <a class="oneheading" href="index2.html"><h4 class="oneheading mb-3" >Employee/Business Login <a  class="oneheading" href="signup_admin.html">/admin</h4></a></center>
</div>
           </section>


<section class="two">
 <div  class="container text-center">


 <h5 class="mt-3"> Find Gender confortable certified  businesses</h5> </div>

    </section>
    <section  class="three">
        <div  class="container">
      <center>
    <div class="buttonshome" style="display:inline-flex">
   <div  class="dropdown " id="dropdowns1" >
            <button class="btn btn-bg-light dropdown-toggle" type="button" id="dropdownMenuButton15" data-bs-toggle="dropdown" aria-expanded="false">
              Business Type/Category
            </button>
<ul class="dropdown-menu"  id="dropdown-menu1" aria-labelledby="dropdownMenuButton15">
              <li><a class="dropdown-item" href="#">Retail</a></li>
              <li><a class="dropdown-item" href="#">Shoes </a></li>
              <li><a class="dropdown-item" href="#">Clothing</a></li>
              <li><a class="dropdown-item" href="#">Entertainment</a></li>
              <li><a class="dropdown-item" href="#">Lingerie</a></li>
            </ul>
          </div>
         <button type="button" class="button button-lg" id="filter">Filter</button>
          </div>
        </center>
    </div>
    </section>
<section class=" container maps">

        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d27442.509736962715!2d76.67859789146954!3d30.709579825276915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smohali%2074%20sector%20phase%208b!5e0!3m2!1sen!2sin!4v1641465167922!5m2!1sen!2sin"
            width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <section class="">
        <div class="container">
        </div>
        <section>
            <div class="container">
                <center>
                    <h6 class="colorsgray">There are 9 gender confortable in the current search area is there is a business you like to see on this map ? click here for information you can send them for becoming certified</h6>
                </center>
            </div>
        </section>

        <!-- fifth End -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
