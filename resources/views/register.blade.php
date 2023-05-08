@extends('template.master')

@section('content')
<h5 class="bg-light p-2 py-3">Login</h5>
<div class="bg-white  p-3 px-4">
    <div class="row align-items-center my-4">
        <label for="" class="col-4">Name</label>
        <div class="col-8">
            <input type="text" class="form-control " placeholder="full name">
        </div>
    </div>
    <div class="row align-items-center my-4">
        <label for="" class="col-4">Email Address</label>
        <div class="col-8">
            <input type="email" class="form-control " placeholder="email">
        </div>
    </div>
    <div class="row align-items-center my-4">
        <label for="" class="col-4">Password</label>
        <div class="col-8">
            <input type="password" class="form-control " placeholder="password">
        </div>
    </div>
    <div class="row align-items-center my-4">
        <label for="" class="col-4">Confirm Password</label>
        <div class="col-8">
            <input type="password" class="form-control " placeholder="confirm password">
        </div>
    </div>

    <div class="row align-items-center my-4">
        <div class="col-4"></div>
        <div class="col-8">
            <button class="btn btn-primary ">Register</button>

        </div>
    </div>

</div>
@endsection