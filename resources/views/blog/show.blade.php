@extends("posts.template")

@section("content")
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header"><strong>{{ $post->title }}</strong></div>
                <div class="card-body">{{ $post->body }}</div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="/posts" class="btn btn-info"><- Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
