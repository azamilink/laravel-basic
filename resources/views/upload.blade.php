@extends("layouts.app")

@section("content")
    <div class="row mt-5"></div>
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">File Upload</div>
            <div class="card-body">
                <form action="{{ route("upload.file") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Choose File</label>
                        <input class="form-control" name="file" type="file" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-success mb-3">Upload</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
