@extends('layouts.app')

@section('content')
    <h3>Upload Photo</h3>
    <hr>
    <div class="card-body">
        <form action="/photos/create" method="post" enctype="multipart/form-data">
        <input type="hidden" name="album_id" value="{{$album_id}}">
        <div class="form-group">
            <label for="title">Photo Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Photo Title">
        </div>

        <div class="form-group">
            <label for="description">Photo Description</label>
            <textarea name="description" id="description" rows="6" class="form-control" placeholder="Photo Description"></textarea>
        </div>

        <div class="form-group">
            <input type="file" name="photo" class="py-2">
        </div>
        @csrf
        <button type="submit" class="btn btn-success">
            Upload Photo
        </button>
    </form>
    </div>
@endsection