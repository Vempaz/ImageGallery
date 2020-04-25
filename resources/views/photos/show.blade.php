@extends('layouts.app')

@section('content')
    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>
    <a href="/albums/{{$photo->album_id}}" class="btn btn-primary">Back To Gallery</a>
    <hr>
    <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}" class="img-fluid">
    <br><br>
    <form action="/photos/{{$photo->id}}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">Delete Photo</button>
    </form>
    <hr>
    <small>Size: {{$photo->size}}</small>
@endsection