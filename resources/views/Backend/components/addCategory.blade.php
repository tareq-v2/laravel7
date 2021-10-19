@extends('Backend.master')
@section('content')
    <div class="container-fluid add-admin-form">
        <div class="row">
            <div class="col-12">
                <div class="form-title-layer">
                    <h5><i class="fas fa-users"></i>&nbsp;&nbsp;Add Category</h5>
                </div>
            </div>
        </div>
        @if (Session::get('success'))
            <div class="alert alert-success alert-block">	
                    <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif

        <form action="{{url('category-store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
                    <input type="number" class="form-control" name="id" value="{{old('id')}}">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="category_name">Category Name</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{old('category_name')}}">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="item_name">Item Name</label>
                </div>
                <div class="col-10">
                    <select name="item_name" class="form-control" id="item_name">
                        @if ($data)
                            @foreach ($data as $showData)
                                <option value="{{ $showData->item_name }}">{{ $showData->item_name }}</option>
                            @endforeach
                        @endif
                </div>
            </div>
                <div class="row">
                    <div class="col-2">
                        <label>Image</label>
                    </div>
                    <div class="col-10">
                        <input type="file" class="filestyle" name="image" accept="image/*" />
                    </div>
                </div>
            <div class="row">
                <div class="col-12" style="text-align: center;">
                    <input type="submit"  class="btn btn-success" value="Create">
                    <a href="{{url('/category-view')}}"class="btn btn-warning">View</a>
                </div>
            </div>
        </form>
    </div>
@endsection