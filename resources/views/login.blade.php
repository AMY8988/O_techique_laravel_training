@extends('template.master')

@section('content')
    <div class="col-9 m-auto border rounded">
        <h5 class="bg-light p-2 py-3">Login</h5>
        <div class="bg-white  p-3 px-4">
            <div class="row align-items-center my-4">
                <label for="" class="col-4">Email Address</label>
                <div class="col-8">
                    <input type="text" class="form-control " placeholder="email">
                </div>
            </div>
            <div class="row align-items-center my-4">
                <label for="" class="col-4">Password</label>
                <div class="col-8">
                    <input type="password" class="form-control " placeholder="password">
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-4"></div>
                <div class="col-8 d-flex">
                    <input type="checkbox" class="form-check me-1">
                    <label class="form-check-label">Remember Me</label>
                </div>
            </div>
            <div class="row align-items-center my-4">
                <div class="col-4"></div>
                <div class="col-8">
                    <button class="btn btn-primary ">Login</button>
                    <a href="">forget your password?</a>
                </div>
            </div>

        </div>
    </div>
@endsection
