@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $user->name }}</h2>


    <hr>

    <h4>User posts</h4>

    @foreach($user->posts as $post)
        <li>
            <strong><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></strong>
            {{ $post->created_at->diffForHumans() }}
        </li>
    @endforeach

@endsection
