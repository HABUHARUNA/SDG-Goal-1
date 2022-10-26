@extends('layout.student')
@section('content')

{{Auth::user()->course->name}}
    <h1>Tailoring</h1>
@endsection
