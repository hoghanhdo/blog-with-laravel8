<!doctype html>

<title>Laravel8 Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="//unpkg.com/alpinejs" defer></script>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        @include('posts/_header')
        {{ $slot }}
    </section>
</body>
