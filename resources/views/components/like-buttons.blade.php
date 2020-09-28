{{--        Note: I could be used color for THUMBS-UP and THUMB-DOWN but since they are SVG images I can't control their colors--}}

<div class="flex">
    <form
        action="/tweets/{{ $tweet->id }}/like"
        method="POST"
    >
        @csrf

        <div class="flex items-center mr-4">

            <img src="{{ asset('images/thumbs-up.svg') }}" alt="" class="mr-1 w-3">
            <button type="submit" class="text-xs text-gray-500">
                {{ $tweet->likes ?: 0 }}
            </button>

        </div>
    </form>

    <form
        action="/tweets/{{ $tweet->id }}/like"
        method="POST"
    >
        @csrf
        @method('DELETE')

        <div class="flex items-center">

            <img src="{{ asset('images/thumbs-down.svg') }}" alt="" class="mr-1 w-3">
            <button type="submit" class="text-xs text-gray-500">
                {{ $tweet->dislikes ?: 0 }}
            </button>

        </div>
    </form>
</div>
