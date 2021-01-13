@extends('layouts.app')

@section('content')
    <h1>Welcome</h1>

    <br/>
    <a href="/posts/index">Posts</a>

    <br/>
    <br/>
    <a href="/slow">Simulate slow page</a>

    <br/>
    <br/>
    <a href="/page-with-lazy-loading-frame">Page with lazy loading frame</a>
@endsection
