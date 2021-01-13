@extends('layouts.app')

@section('content')
    <h1>Create a new Post</h1>

    <form action="/posts" method="POST">
        @csrf

        Title <input type="text" name="title" />
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br/>
        <br/>

        Body <textarea name="body"></textarea>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br/>
        <br/>
        <button type="submit">Create</button>
    </form>


    <a href="/posts/index">Back</a>
@endsection
