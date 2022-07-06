<x-layout>
    @include('posts._banner')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($posts->count())
                <x-posts-grid :posts="$posts"/>
                {{ $posts->links() }}
            @else
                <p class="text-center">No posts yet. Please check back later.</p>
            @endif
        </main>
    @include('posts._footer')
</x-layout>
