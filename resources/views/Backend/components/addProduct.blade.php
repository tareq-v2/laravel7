@extends('Backend.master')
@section('content')
    <div class="container-fluid add-admin-form">
        <div class="row">
            <div class="col-12">
                <div class="form-title-layer">
                    <h5><i class="fas fa-users"></i>&nbsp;&nbsp;Add Product</h5>
                </div>
            </div>
        </div>
        @if (Session::get('success'))
            <div class="alert alert-success alert-block">
                    <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        <form action="{{url('product-store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
                    <label>Product ID</label>
                </div>
                <div class="col-10">
                    <input type="number" class="form-control" name="id" value="{{old('id')}}">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="product_name">Product Name</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{old('product_name')}}">
                </div>
            </div>
            @error('product_name')
                <center> <span style="color: red;font-size: 16px;text-align: center;"><small>{{$message}}</small></span></center>
            @enderror
            <div class="row">
                <div class="col-2">
                    <label for="item_id">Item ID</label>
                </div>
                <div class="col-10">
                    <select name="item_name" class="form-control" id="item_id">
                        @if($data)
                            @foreach ($data as $showData)
                                <option value="{{ $showData->id }}">{{ $showData->item_name }}</option>
                            @endforeach
                        @endif
                    </select>         
                </div>
            </div>
            @error('Item_name')
                <center> <span style="color: red;font-size: 16px;text-align: center;"><small>{{$message}}</small></span></center>
            @enderror
            <div class="row">
                <div class="col-2">
                    <label for="category_id">Category ID</label>
                </div>
                <div class="col-10">
                    <select name="category_name" class="form-control" id="category_id">
                        @if ($cat)
                            @foreach ($cat as $showData)
                                <option value="{{ $showData->id }}">{{ $showData->category_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            @error('category_name')
                <center> <span style="color: red;font-size: 16px;text-align: center;"><small>{{$message}}</small></span></center>
            @enderror
            <div class="row">
                <div class="col-2">
                    <label for="old_price">Old Price</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control @error('old_price') is-invalid @enderror" name="old_price" value="{{old('old_price')}}">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="sale_price">sale Price</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control @error('sale_price') is-invalid @enderror" name="sale_price" value="{{old('sale_price')}}">
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="description">Description</label>
                </div>
                <div class="col-10">
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description')}}">
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
                    <a href="{{url('/product-view')}}"class="btn btn-warning">View</a>
                </div>
            </div>
        </form>
    </div>
@endsection