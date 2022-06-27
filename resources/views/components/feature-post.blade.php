@props(['post'])
<article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="https://www.kickative.com/wp-content/uploads/2020/04/networking_illustration.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <x-category-area :category="$post->category" />
                <div class="mt-4">
                    <a href="/posts/{{$post->slug}}">
                        <h1 class="text-3xl">
                            {{ $post->title }}
                        </h1>
                    </a>
                    <span class="mt-2 block text-gray-400 text-xs">
                            Published <time>{{ $post->created_at->diffForHumans() }}</time>
                        </span>
                </div>
            </header>

            <div class="text-sm mt-2">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
            <x-author-area :post="$post" />
        </div>
    </div>
</article>
