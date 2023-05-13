@extends('template.master')

@section('content')
    <div class="col-12 col-md-3">
        @include('template.aside')
    </div>

    <div class="col-12 col-md-6">
        <h5 class="bg-light p-2 py-3">User List</h5>
        <table class="table ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td> {{ $user->id }} </td>
                        <td> {{ $user->Cap_name }} </td>

                        <td>
                            <a href=" {{ route('user.show', $user->id) }} "
                                class="  btn btn-sm btn-outline-primary">detail</a>
                            
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
