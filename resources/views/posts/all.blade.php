@extends("posts.template")

@section("content")
    <div class="row">
        <div class="col-md-12 justify-content-between">
            <h1 class="text-center">All Posts</h1>
            <a href="{{ route("posts.create") }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    <div class="row mt-2">
        @if (Session::has("post_deleted"))
            <div class="alert alert-success" role="alert">
                {{ Session::get("post_deleted") }}
            </div>
        @endif
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route("posts.show", $post->id) }}" class="btn btn-info me-1">Show</a>
                                <a href="{{ route("posts.edit", $post->id) }}" class="btn btn-warning me-1">Edit</a>
                                <a href="{{ route("posts.delete", $post->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
