@extends('template.master')

@section('content')
    <div class="col-12 col-md-3">
        @include('template.aside')
    </div>
    <div class="col-12 col-md-9 ">
        <h5 class="bg-light p-2 py-3">Post create</h5>
        <form action="{{ route('post.store') }}" method="post">
            @csrf

            <div class="bg-white  p-3 px-4">

                <div class="row align-items-start my-4">
                    <label class="col-4">Title</label>
                    <div class="col-8">
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="" name="title">
                        @error('title')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row align-items-start my-4">
                    <label for="" class="col-4">Description</label>
                    <div class="col-8">
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        @error('description')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row align-items-start my-4">
                    <div class="col-4"></div>
                    <div class="col-8">
                        <button class="btn btn-primary ">Create Post</button>

                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
