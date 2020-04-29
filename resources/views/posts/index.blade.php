@extends('layouts.default')

@section('title','Blog Posts')

@section('content')
<h1>
    <a href="{{ url('posts/create')}}" class="header-menu">New Post</a>
    Blog Posts
</h1>
        <ul>
            @forelse($posts as $post)
            <li>
                <a href="{{ action('PostController@show', $post) }}">{{ $post->title }}</a>

                <a href="{{ action('PostController@edit', $post) }}" class="edit">[Edit]</a>
                
                <a href="#" class="del" data-id="{{ $post->id }}">[×]</a>
                
                <form method="POST" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                </form>
            </li>
            @empty
            <li>No posts yet</li>
            @endforelse
        </ul>
        <script src="js/main.js"></script>
@endsection