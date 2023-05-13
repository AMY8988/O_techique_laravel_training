@extends('template.master')

@section('content')
    <div class="col-9 border rounded m-auto">
        <h5 class="bg-light p-2 py-3">Registor</h5>
        <form action="{{ route('user.create') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="bg-white  p-3 px-4">

                <div class="row align-items-start my-4">
                    <label class="col-4">First name</label>
                    <div class="col-8">
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="name" name="name">
                        @error('name')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row align-items-start my-4">
                    <label for="" class="col-4">Email Address</label>
                    <div class="col-8">
                        <input type="email" class="form-control @error('email') is-invalid @enderror "
                            value="{{ old('email') }}" name="email" placeholder="email">
                        @error('email')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row align-items-start my-4">
                    <label for="" class="col-4">Password</label>
                    <div class="col-8">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            value="{{ old('password') }}" name="password" placeholder="password">
                        @error('password')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row align-items-start my-4">
                    <label for="" class="col-4">Confirm Password</label>
                    <div class="col-8">
                        <input type="password" class="form-control " name="password_confirmation"
                            placeholder="confirm password">
                    </div>
                </div>
                <div class="row align-items-start my-4">
                    <label for="" class="col-4">Image Upload</label>
                    <div class="col-8">
                        <input type="file" class="form-control " name="imgUpload">
                        {{-- @error('password')
                            <div class=" invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                </div>

                <div class="row align-items-start my-4">
                    <div class="col-4"></div>
                    <div class="col-8">
                        <button class="btn btn-primary ">Register</button>

                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
