@extends('layouts.app')

@section('content')
    <h1>{{$album->name}}</h1>
    <a href="/" class="btn btn-primary">Go Back</a>
    <a href="/photos/create/{{$album->id}}" class="btn btn-info">Upload Photo To Album</a>
    <hr>
    @if(count($album->photos) > 0)
    <?php
      $colcount = count($album->photos);
  	  $i = 1;
    ?>
    <div id="photos" class="container">
      <div class="row text-center">
        @foreach($album->photos as $photo)
          @if($i == $colcount)
             <div class='col-4 align-self-end'>
               <a href="/photos/{{$photo->id}}">
                  <img class="img-thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
               <br>
               <h4>{{$photo->title}}</h4>
          @else
            <div class='col-4'>
            <a href="/photos/{{$photo->id}}">
                <img class="img-thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                </a>
                <br>
                <h4>{{$photo->title}}</h4>
          @endif
        	@if($i % 3 == 0)
          </div></div><div class="row text-center">
        	@else
            </div>
          @endif
        	<?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <p>No Photos To Display</p>
  @endif
 
  <form action="/albums/{{$album->id}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger">Delete Album</button>
</form>

@endsection