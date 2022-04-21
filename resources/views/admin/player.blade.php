@extends('admin.layouts.main')
@section('main-container')
<!-- Third div start -->
<section class="third_sec bg-light" >
  <center>
    <div class="container " id="media">
      @if($data->media_type == "application/pdf")
      <embed
      src="{{asset('storage/'.$data->media)}}#toolbar=0&navpanes=0"
      type="application/pdf"
      frameBorder="0"
      scrolling="auto"
      height="100%"
      width="100%"
      oncontextmenu="return false" 
  ></embed> 

  @elseif($data->media_type == "image/jpeg" || $data->media_type == "image/png")
  <img class="img-fluid" class="image" src="{{asset('storage/'.$data->media)}}" height="260px" width="260px" alt="...">
  @else
  <video width="320" height="240"  controls controlsList="nodownload">
    <source src="{{asset('storage/'.$data->media)}}" type="video/mp4">
  </video>  @endif
      </div>
    </div>
</center>
</section>
@endsection
