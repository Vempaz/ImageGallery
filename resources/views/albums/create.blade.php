@extends('layouts.app')

@section('content')
    <h3>Create Album</h3>
    <hr>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Album's Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Album name">
        </div>

        <div class="form-group">
            <label for="description">Album's Description</label>
            <textarea name="description" id="description" rows="6" class="form-control" placeholder="Album descriptionription"></textarea>
        </div>

        <div class="form-group">
            <input type="file" name="cover_image" class="py-2">
        </div>
        @csrf
        <button type="submit" class="btn btn-success">
            Submit
        </button>
    </form>
    </div>
@endsection