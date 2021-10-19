@extends('Backend.master')
@section('content')
    <div class="container-fluid add-admin-form">
        <div class="row">
            <div class="col-12">
                <div class="form-title-layer">
                    <h5><i class="fas fa-users"></i>&nbsp;&nbsp;Edit Category</h5>
                </div>
            </div>
        </div>
        @if (Session::get('info'))
            <div class="alert alert-info alert-block">	
                    <strong>{{ Session::get('info') }}</strong>
            </div>
        @endif

        <form action="{{url('category-update')}}/{{$id}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-2">
                    <label>Category ID</label>
                </div>
                <div class="col-10">
                    <input type="number" class="form-control" name="id" value="{{$data->id}}">
                    <input type="hidden" name="admin_id" value="#">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="category_name">Category Name</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{$data->category_name}}">
                </div>
            </div>
            @error('category_name')
                <center> <span style="color: red;font-size: 16px;text-align: center;"><small>{{$message}}</small></span></center>
            @enderror
            <div class="row">
                <div class="col-2">
                    <label for="item_name">Item Name</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{$data->item_name}}">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label>Image</label>
                </div>
                <div class="col-10">
                    <input type="file" class="filestyle" name="image" accept="image/*" />
                    <img src="{{ url('/') }}/{{ $data->image }}" style="height: 100px;">
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="text-align: center;">
                    <input type="submit"  class="btn btn-success" value="Update">
                    <a href="{{url('/category-view')}}"class="btn btn-warning">View</a>
                </div>
            </div>
        </form>
    </div>
@endsection