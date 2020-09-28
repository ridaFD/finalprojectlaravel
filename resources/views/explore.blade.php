<x-app>
    @foreach($users as $user)
        <a href="{{ $user->path() }}" class="flex items-center mb-5">
            <img src="{{ $user->avatar }}"
                 alt="{{ $user->username }}"
                 width="60"
                 class="mr-4 rounded"
            >


            <div class="font-bold">{{ '@' . $user->name }}</div>
        </a>
    @endforeach

    {{ $users->links() }}

</x-app>
