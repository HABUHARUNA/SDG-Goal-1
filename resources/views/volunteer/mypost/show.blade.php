@extends('layout.volunteer')
@section('content')
    <div class="container">
        <h3>{{$post->title}}</h3>
        <h3>{{$post->file}}</h3>
        <h3>{{$post->body}}</h3>
    </div>
   
@endsection