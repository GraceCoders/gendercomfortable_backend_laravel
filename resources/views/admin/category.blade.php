@extends('admin.layouts.main')
@section('main-container')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<section class="third-sec bg-light">
    <div class="container ">
    <div class="home bg-light">
      <div class="container text-center ">
        <div class="home_course">
          <div class="col-lg-6 col-12">
            <button type="button" class="btn btn btn-lg float-end " id="radius_btn12" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <img class="img-fluid" id="plus_image" src="{{ asset('assets/slicing_web/plus_white.svg') }}" alt="...">&nbsp;&nbsp;Add </button></a>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form method="POST" action="{{route('admin.category.add')}}">
                    @csrf
                    <div class="modal-body">
                      <div class=" form-floating ">
                        <input type="text" name="name" class="form-control">
                        <label for="floatingInput"><strong>
                            Category name</strong></label>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn " style="background-color: #6A359F; color:white">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          <div class="second-div">

            <div class=" row fourth-div">
              <div class="ajax_meassage"></div>
              @if(session()->has('success'))
              <div class="alert alert-success">
                {{ session()->get('success') }}
              </div>
              @endif
              @if(session()->has('info'))
              <div class="alert alert-info">
                {{ session()->get('info') }}
              </div>
              @endif
              <table class="table categoryTable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
          <section class="third-sec ">
            <div class="container text-center ">
            </div>
        </div>
      </div>
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h4 class="modal-title"></h4>
            </div>
            <input type="hidden" name="category_id" id="category_id" value="">
            <div class="modal-body">
              <p>Are you Sure you want Delete this Catgory?.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info " id="category_delete">Confirm</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="editCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Edit Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{route('admin.category.update')}}">
              @csrf
              <div class="modal-body">
                <div class="edit_category form-floating ">


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary update_category">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $(function() {
      var table = $('.categoryTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.category.list') }}",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
          },
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'updated_at',
            name: 'updated_at'
          },
          {
            data: 'action',
            name: 'action'
          },
        ]
      });
    });
  });
  $(document).ready(function() {
    $(".alert").delay(4000).slideUp(300);
    $('.message').hide();

  });
  $(document).on("click", ".delete-modal", function(e) {
    var delete_id = $(this).data('id');
    $('#category_id').val(delete_id);
    $('#myModal').modal('show');
  });
  $(document).on("click", "#category_delete", function(e) {

    var category_id = $('#category_id').val();
    $.ajax({
      type: 'POST',
      url: '{{route("admin.category.delete")}}',
      data: {
        id: category_id
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(data) {
        $('#myModal').modal('hide');
        $('.edit_category').append('<div class="alert alert-success message">' + data + '</div>');
        $(".message").delay(4000).slideUp(300);
        var oTable = $('.categoryTable').dataTable();
        oTable.fnDraw(false);
      }
    });
  });
  $(document).on("click", ".edit-modal", function(e) {
    var category_id = $(this).data('id');
    $.ajax({
      type: 'POST',
      url: '{{route("admin.category.edit")}}',
      data: {
        id: category_id
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(data) {
        $('#editCategory').modal('show');
        $('.edit_category').append('<input type="text" name="name" id="category_name" value="' + data.name + '" class="form-control"><input type="hidden" name="id" id="category_id" value="' + data.id + '" class="form-control"><label for="floatingInput"><strong>Category name</strong></label></div>');
      }
    });
    $(document).on("click", ".update_category", function(e) {
      var category_id = $('#category_id').val();
      var category_name = $('#category_name').val();
      $.ajax({
        type: 'POST',
        url: '{{route("admin.category.update")}}',
        data: {
          id: category_id,
          name: category_name
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
          $('#editCategory').modal('hide');
          $('.edit_category').append('<div class="alert alert-success message">' + data + '</div>');
          $(".message").delay(4000).slideUp(300);
          var oTable = $('.categoryTable').dataTable();
          oTable.fnDraw(false);
        }
      });
    });
  });
  $(document).on("click", ".close_category", function(e) {
    $('#editCategory').modal('hide');

  });
</script>