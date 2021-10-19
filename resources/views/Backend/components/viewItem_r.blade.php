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
                            {{-- Line below are basic url routing --}}
                            {{-- <a href="{{ url('/item-edit') }}/{{ $showData->id }}" class="btn btn-info">Edit</a> --}}

                            {{-- Edit Data via Resource{url} Controller Example --}}
                            <a href="{{ url('/item-info') }}/{{ $showData->id }}/edit" class="btn btn-info">Edit</a>

                            {{-- Edit Data via Resource{Route} Controller Example --}}
                            <a href="{{ route('item-info.edit', $showData->id) }}" class="btn btn-info">Edit</a>

                            {{-- In laravel resource controller to delete data from server we use Php method caller "DELETE" --}}
                            <form action="{{ url('item-info') }}/{{ $showData->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection