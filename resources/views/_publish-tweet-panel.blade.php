<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="post" action="/tweets">
        @csrf

            <textarea
                name="body"
                id=""
                class="w-full outline-none"
                placeholder="What's up doc?"
                required
            ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2 h-10 w-10"
            >

            <x-blue-button></x-blue-button>
        </footer>
    </form>

    <div>
        @error('body')
            <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
        @enderror
    </div>

</div>
