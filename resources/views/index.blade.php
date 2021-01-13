@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <a href="/posts/create">Create a new Post</a>

    <br/>
    <br/>

    <turbo-frame id="posts_1">
        1. {{ session()->get('post-title', 'My First Post') }} <a href="/posts/1/edit">Edit</a>
    </turbo-frame>

    <br/>
    <br/>
    <a href="/">Back</a>
@endsection
