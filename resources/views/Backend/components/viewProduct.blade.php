@extends('Backend.master');
@section('content')

<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <td>SL</td>
                <td>Product Name</td>
                <td>Item Name</td>
                <td>Category Name</td>
                <td>Description</td>
                <td>Image</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @if ($data)
                @foreach ($data as $showData)
                    <tr>
                        <td>{{ $showData->id }}</td>
                        <td>{{ $showData->product_name }}</td>
                        <td>{{ $showData->item_name }}</td>
                        <td>{{ $showData->category_name }}</td>
                        <td>{{ $showData->description }}</td>
                        <td><img style='height: 100px;' src="{{url('/')}}/{{$showData->image}}"></td>
                        <td>
                            <a href="{{ url('/product-edit') }}/{{ $showData->id }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('/product-delete') }}/{{ $showData->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection