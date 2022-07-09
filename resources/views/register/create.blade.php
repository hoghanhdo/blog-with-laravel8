<x-layout>
    <section class="px-6 py-8 mt-10">
        <main class="max-w-lg mx-auto mt-10 border bg-gray-100 border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="POST" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                            type="text" name="name" id="name" required
                    >

                    <label for="user_name" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5">
                        Username
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                            type="text" name="user_name" id="user_name" required
                    >

                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                            type="text" name="email" id="email" required
                    >

                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                            type="password" name="password" id="password" required
                    >

                    <div class="mb-6 mt-10">
                        <button type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        >
                            Submit
                        </button>
                    </div>
                    @error(['username', 'name', 'password'])
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </form>
        </main>
    </section>
</x-layout>
