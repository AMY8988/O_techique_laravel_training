@extends('template.master')

@section('content')
    <div class="col-12 col-md-3">
        @include('template.aside')
    </div>

    <div class="col-12 col-md-6">
        <div class="bg-light p-2 py-3 ">
            <h5 class="">Post Detail</h5>

        </div>

        <div class="p-3">
            <h5>{{ $post->title }}</h5>
            <span class="fs-6 text-black-50 ">{{ $post->created_at }}</span>
            <p class="my-3">{{ $post->description }}</p>
            <span class="text-black-50 fw-bolder">-{{ $post->user->name }}</span>
        </div>
    </div>
@endsection
