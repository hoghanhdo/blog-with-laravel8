@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article>
            <div class="post_title">
                <h1>
                    <a href="/posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </h1>
            </div>

            <div class="post_excerpt">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        </article>
    @endforeach
@endsection
