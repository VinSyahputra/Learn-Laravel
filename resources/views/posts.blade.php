{{-- @dd($posts) --}}
@extends('layouts.main')
@section('content')
    @foreach ($posts as $post)
        <article>
            <h1><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h1>
            <h4>{{ 'Author : '.$post['author'] }}</h4>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection