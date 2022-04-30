@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->title }}</h1>

        {!! $post->body !!}
        <!-- jika di db ada tag html, gunakan cara ini -->
    </article>

    <a href="/blog">Back to post</a>


@endsection