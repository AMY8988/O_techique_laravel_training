@extends('layout.master')

@section('title')
index
@endsection

@section('content')
<h1>Item list</h1>
<table class=" table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Control</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($items as $item)
            <tr>
                <td> {{$item->id}} </td>
                <td> {{$item->name}} </td>
                <td> {{$item->price}} </td>
                <td> {{$item->stock}} </td>
                <td>
                    <a href="{{ route('item.show' , $item->id ) }}" class=" btn btn-sm btn-outline-primary">detail</a>
                    <a href="{{ route('item.edit' , $item->id ) }}" class=" btn btn-sm btn-outline-info">edit</a>

                    <form action="{{ route('item.destory' , $item->id) }}" method="post" class="d-inline-block">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-outline-danger">delete</button>
                    </form>

                </td>
            </tr>

            @empty
            <tr>
                <td colspan="5" class="text-center">
                    <p>There is no record</p>
                    <a href="{{ route('item.create') }}" class="btn btn-sm btn-primary">create new</a>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
