{{-- @dd($posts) --}}
@extends('layouts.main')
@section('content')
<h1>Post Category : {{ $category }}</h1>
<p><a href="/categories">see all categories</a></p>
    @foreach ($posts as $post)
        <article>
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <h4>{{ 'Author : '.$post->author }}</h4>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection