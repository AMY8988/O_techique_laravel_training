@extends('layout.master')

@section('title')
Item Create
@endsection

@section('content')

<p class=" fw-bold h4">Item Edit</p>

<form action="{{ route('item.update' , $item->id) }}" method="post">

    @method('put')
    @csrf

    <div class="col-12 col-md-6">
        <div class="col-12 mb-3">
            <label for="" class=" form-label">Item name</label>
            <input type="text" class=" form-control" name="name" value="{{ $item->name }}">
        </div>

        <div class="col-12 mb-3">
            <label for="" class=" form-label">Price</label>
            <input type="number" class=" form-control" name="price" value="{{ $item->price }}">
        </div>

        <div class="col-12 mb-3">
            <label for="" class=" form-label">Stock</label>
            <input type="number" class=" form-control" name="stock" value="{{ $item->stock }}">
        </div>

        <button class="btn btn-outline-primary">Edit Item</button>
    </div>

</form>
@endsection
