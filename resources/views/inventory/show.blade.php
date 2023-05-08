@extends('layout.master')

@section('title')
Create
@endsection

@section('content')

<h4 class=" fw-bold mb-3">Item Detail</h4>
<div class="col-12 col-md-8 ">
    <table class="table border border-1 rounded">

        <tr>
            <td>Name</td>
            <td>{{ $item->name }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{ $item->price }}</td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>{{ $item->stock }}</td>
        </tr>
        <tr>
            <td>Created_at</td>
            <td>{{ $item->created_at }}</td>
        </tr>
        <tr>
            <td>Updated_at</td>
            <td>{{ $item->updated_at }}</td>
        </tr>
    </table>
</div>


@endsection
