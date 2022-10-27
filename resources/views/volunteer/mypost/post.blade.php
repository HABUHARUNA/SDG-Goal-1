@extends('layout.volunteer')
@section('content')
    <h3>Your Posts</h3>
    <table class = "table table-striped">
        <tr>
            <th>Title</th>
            <th>Materials</th>
            <th>Body</th>
            <th>Actions</th>
        </tr>
        @foreach($posts as $post)

        <tr>
            <td>{{$post->titile}}</td>
            <td>{{$post->file}}</td>
            <td>{{$post->body}}</td>
            <td>
            <div class="d-flex flex-row mb-3">
                <div class="p-2"><a href="/posts/show/{{$post->id}}" class="btn btn-success">Show</a></div>
                <div class="p-2"><a href="/posts/edit/{{$post->id}}" class="btn btn-warning">Edit</a></div>
                <div class="p-2"><a href="/posts/delete/{{$post->id}}" class="btn btn-danger">Delete</a></div>
            </div>
            </td>
        </tr>
        @endforeach
    </table>

    {{-- <div class="mt-2">
        {{$posts->links()}}
    </div> --}}

@endsection