@extends('layout.student')
@section('content')

{{Auth::user()->course->name}}
    <h1>Baking</h1>
@endsection
