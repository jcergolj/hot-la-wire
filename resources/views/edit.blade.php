@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <turbo-frame id="posts_1">

        <form action="/posts/1/update" method="POST">
            @csrf
            @method('PUT')

            Title <input type="text" name="title" value="{{ session()->get('post-title', 'My First Post') }}" />
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br/>
            <br/>
            <button type="submit">Save</button>
        </form>
    </turbo-frame>

    <br/>
    <br/>
    <a href="/posts/index">Back</a>
@endsection
