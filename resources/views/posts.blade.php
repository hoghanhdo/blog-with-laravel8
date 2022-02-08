@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article>
            <div class="post_title">
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <small>
                    By <a href="/authors/{{ $post->author->user_name }}"> {{ $post->author->name }}<a/> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </small>
            </div>

            <div class="post_excerpt">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        </article>
    @endforeach
@endsection
