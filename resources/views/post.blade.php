@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post['title'] }}</h1>
        <h3>by {{ $post['author'] }}</h3>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/blog">Back to post</a>


@endsection