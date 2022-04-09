@extends('layouts.main')
@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <h4>{{ $post->author }}</h4>
        <h5 class="text-secondary"><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        {!! $post->body !!}
    </article>
    <a href="/posts" class="btn btn-warning">Back to Posts</a>
@endsection