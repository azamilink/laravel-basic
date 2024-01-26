@extends("posts.template")
@section("content")
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">Update this post</div>
                <div class="card-body">
                    @if (Session::has("post_updated"))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get("post_updated") }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route("posts.update") }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $post->id }}">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{ old("title", $post->title) }}" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Description</label>
                            <textarea rows="3" class="form-control" id="body" name="body">{{ old("body", $post->body) }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/posts" class="btn btn-seccondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
