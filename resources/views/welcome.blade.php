@extends('template.master')

@section('content')
    <div class="col-12 col-md-3">
        @include('template.aside')
    </div>

    <div class="col-12 col-md-9">
        <h5 class="bg-light p-2 py-3">Home Section</h5>
        <div class="bg-white  p-3 px-4">
            <h4>This is home</h4>
        </div>
    </div>
@endsection
