@extends('template.master')

@section('content')
    <div class="col-12 col-md-3">
        @include('template.aside')
    </div>

    <div class="col-12 col-md-6">
        <h5 class="bg-light p-2 py-3">Deleted Users</h5>
        <table class="table ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Control</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($deleted_users as $user)
                    <tr>
                        <td> {{ $user->id }} </td>
                        <td> {{ $user->name }} </td>
                        <td>
                            <a href=" {{ route('user.restore', $user->id) }} "
                                class="  btn btn-sm btn-outline-primary">restore</a>
                            <form class="d-inline-block" action="{{route('user.clearHistory' , $user->id)}}" method="post">
                                @csrf
                                @method('delete')

                                <button class="btn btn-sm btn-outline-info" >Clear</button>
                            </form>

                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
