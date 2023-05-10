@extends('template.master')

@section('content')
    <div class="col-12 col-md-3">
        @include('template.aside')
    </div>

    <div class="col-12 col-md-6">
        <h5 class="bg-light p-2 py-3">User Detail</h5>
        <table class="table ">
            <tr>
                <th>Id</th>
                <td> {{ $user->id }} </td>
            </tr>
            <tr>
                <th>Name</th>
                <td> {{ $user->name }} </td>
            </tr>
            <tr>
                <th>Email</th>
                <td> {{ $user->email }} </td>
            </tr>
            <tr>
                <th>Password</th>
                <td> {{ $user->password }} </td>
            </tr>
        </table>
    </div>
@endsection
