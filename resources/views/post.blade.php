@extends('layout')

@section('content')
    <article>
        <div class="post_title">
            <h1>{{ $post->title }}</h1>
        </div>

        <div class="post_body">
            <p>
                {{ $post->body }}
            </p>
        </div>

        <span>
            <a href="/">Go back</a>
        </span>
    </article>
@endsection
