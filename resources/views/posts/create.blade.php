@extends("posts.template")
@section("content")
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">Create new post</div>
                <div class="card-body">
                    @if (Session::has("post_created"))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get("post_created") }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route("posts.submit") }}">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Description</label>
                            <textarea rows="3" class="form-control" id="body" name="body"></textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/posts" class="btn btn-seccondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
