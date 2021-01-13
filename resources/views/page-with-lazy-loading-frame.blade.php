@extends('layouts.app')

@section('content')
    <h1>Turbo Frame with lazy loading frame</h1>
    Page content

    <br/>
    <br/>
    <turbo-frame id="lazy-loading-frame" src="/lazy-loading-frame-content">
        Please wait loding ...
    </turbo-frame>
@endsection
