<div>



    <div class="list-group">
        <a href="{{ route('home') }}" class=" list-group-item list-group-item-action">Home</a>
    </div>

    @if (auth()->guard('admin')->user()->is_owner)
    <p class=" fw-bold mt-3 my-2">User Management</p>
    <div class="list-group">
        <a href="{{ route('user.index') }}" class=" list-group-item list-group-item-action">User List</a>
        <a href="{{ route('user.bin') }}" class=" list-group-item list-group-item-action">User Bin</a>

    </div>

    <p class=" fw-bold mt-3 my-2">Posts Management</p>
    <div class="list-group">
        <a href="{{ route('post.create') }}" class=" list-group-item list-group-item-action">Post Create</a>
        <a href="{{ route('post.index') }}" class=" list-group-item list-group-item-action">Post List</a>

    </div>
    @endif
</div>
