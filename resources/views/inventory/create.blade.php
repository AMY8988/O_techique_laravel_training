@extends('layout.master')

@section('title')
Item Create
@endsection

@section('content')

<p class=" fw-bold h4">Item Create</p>

<form action="{{ route('item.store') }}" method="post">

    @csrf

    <div class="col-12 col-md-6">
        <div class="col-12 mb-3">
            <label for="" class=" form-label">Item name</label>
            <input type="text" class=" form-control" name="name">
        </div>

        <div class="col-12 mb-3">
            <label for="" class=" form-label">Price</label>
            <input type="number" class=" form-control" name="price">
        </div>

        <div class="col-12 mb-3">
            <label for="" class=" form-label">Stock</label>
            <input type="number" class=" form-control" name="stock">
        </div>

        <button class="btn btn-outline-primary">Save Item</button>
    </div>

</form>
@endsection
