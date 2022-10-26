@extends('layout.student')
@section('content')

<h1>{{Auth::user()->course->name}}</h1>
    @foreach ($posts as $post)
        <h1>{{$post->title}}</h1>
        <p></p>
        <img src="" alt="">
    @endforeach
    
@endsection
