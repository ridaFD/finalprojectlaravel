@if(current_user()->isNot($user))
    <form
        method="post"
        action="/profiles/{{ $user->name }}/follow"
    >
        @csrf

        <button
            type="submit"
            class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
        >
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow' }}
        </button>
    </form>
@endif
