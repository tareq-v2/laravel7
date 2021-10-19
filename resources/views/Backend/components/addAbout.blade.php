@extends('Backend.master')
@section('content')
<div class="container-fluid add-admin-form">
  <div class="row">
      <div class="col-12">
          <div class="form-title-layer">
              <h5><i class="fas fa-users"></i>&nbsp;&nbsp;Add About Us Text</h5>
          </div>
      </div>
  </div>
  @if (Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="btn btn-success close" data-dismiss="alert">×</button> 
                    <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
  @if($data)
  <form action="{{url('about-store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-2">
          <label>Admin ID</label>
      </div>
      <div class="col-10">
          <input type="number" class="form-control" name="admin_id" value="{{$data->admin_id}}">
      </div>
  </div>
    <div class="row">
      <div class="col-2">
          <label>Description</label>
      </div>
      <div class="col-10">
        <textarea id="summernote" name="description">{{$data->description}}</textarea>
      </div>
  </div>
    <div class="text-center my-2">
      <button class="btn btn-success">Submit</button>
    </div>
  </form>
  @endif
</div>   
<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>

@endsection