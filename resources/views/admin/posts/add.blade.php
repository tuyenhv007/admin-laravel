@extends('admin.master')
@section('content')
    <div class="col-md-12 pt-4">
        <div class="card">
            <div class="card-header">
                Create Post
            </div>
            <div class="card-body">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Desc</label>
                        <input type="text" class="form-control" name="desc">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea type="text" class="form-control" name="content_post" cols="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
