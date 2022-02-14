<x-layout>
{{-- @foreach ($posts as $post)
        <article>
            <div class="post_title">
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <small>
                    By <a href="/authors/{{ $post->author->user_name }}"> {{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </small>
            </div>

            <div class="post_excerpt">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        </article>
    @endforeach --}}
    <x-slot name="posts">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <!--  Feature post - 1 post -->
            <x-feature-post />
            <!--  Other highlight posts - 2 posts -->
            <div class="lg:grid lg:grid-cols-2">
                <x-post />
                <x-post />
            </div>
            <!--  Normal posts - 3 posts -->
            <div class="lg:grid lg:grid-cols-3">
                <x-post />
                <x-post />
                <x-post />
            </div>
        </main>
    </x-slot>
</x-layout>
