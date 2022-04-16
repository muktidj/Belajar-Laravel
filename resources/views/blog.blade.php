@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
    <article class="mb-6">
        <h1>
            <a href="/blog/{{ $post["slug"] }}">{{ $post["title"]  }}</a>
        </h1>
        <h3>By: {{ $post["author"] }}</h1>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach
@endsection
