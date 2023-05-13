@extends('template.master')

@section('content')
    <div class="col-12 col-md-3">
        @include('template.aside')
    </div>

    <div class="col-12 col-md-9">
        <h5 class="bg-light p-2 py-3">Post List</h5>
        <table class="table ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Owner</th>

                    <th>Control</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td> {{ $post->id }} </td>
                        <td> {{ Str::limit($post->title, 10, '...') }} </td>
                        <td > {{ Str::limit($post->description, 20, '...') }} </td>
                        <td> {{ $post->user->name }} </td>
                        {{-- <td> @dump($post->user) </td> --}}

                        <td >
                            <a href=" {{ route('post.show', $post->id) }} "
                                class="  btn btn-sm btn-outline-primary">detail</a>
                            <form action="{{ route('post.destroy', $post->id) }}" method="post" class=" d-inline-block">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>

        <div>
            {{$posts->links() }}
        </div>
    </div>
@endsection
