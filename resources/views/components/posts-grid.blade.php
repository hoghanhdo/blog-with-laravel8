@props(['posts'])

<x-feature-post :post="$posts->first()" />

@if ($posts->count() > 1)
    <div class="lg:grid lg:grid-cols-2">
        @foreach ($posts->skip(1)->take(2) as $post)
            <x-single-post :post="$post" />
        @endforeach
    </div>
    <div class="lg:grid lg:grid-cols-3">
        @foreach ($posts->skip(3) as $post)
            <x-single-post :post="$post" />
        @endforeach
    </div>
@endif
