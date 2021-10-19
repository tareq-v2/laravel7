@extends('Backend.master');
@section('content')

<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <td>SL</td>
                <td>Item Name</td>
                <td>Image</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @if ($data)
                @foreach ($data as $showData)
                    <tr>
                        <td>{{ $showData->sl }}</td>
                        <td>{{ $showData->item_name }}</td>
                        <td><img style='height: 100px;' src="{{url('/')}}/{{$showData->image}}"></td>
                        <td>
                            <a href="{{ url('/item-edit') }}/{{ $showData->id }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('/item-delete') }}/{{ $showData->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection