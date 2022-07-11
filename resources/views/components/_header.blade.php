<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="https://www.coderslab.com.bd/wp-content/uploads/2021/01/laravel.png" alt="Laracasts Logo" width="124" height="12">
        </a>
    </div>
        <div class="mt-8 md:mt-0 flex items-center">
            @auth
            {{-- OR @guest OR @if (!auth()->check()) OR @unless (auth()->check()) --}}
                <span class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>
                <form action="/logout" method="POST" class="text-xs text-blue-500 ml-3">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase text-blue-500">Login</a>
            @endauth
            <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
        </div>
</nav>
