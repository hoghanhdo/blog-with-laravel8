@props(['author', 'post'])

<footer class="flex justify-between items-center mt-8">
    <div class="flex items-center text-sm">
        <img src="/images/avatar-batman.svg" alt="Avatar">
        <div class="ml-3">
            <a href="/authors/{{ $author->user_name }}">
                <h5 class="font-bold">{{ $author->name }}</h5>
            </a>
        </div>
    </div>

    <div class="hidden lg:block">
        <a href="/posts/{{ $post->slug }}"
            class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
        >Read More</a>
    </div>
</footer>
