<ul>
    <li class="text-center">
        <a href="{{ route('home') }}" class="font-black text-lg mb-4 block">
            Home
        </a>
    </li>
    <li class="text-center">
        <a href="{{ route('explore') }}" class="font-black text-lg mb-4 block">
            Explore
        </a>
    </li>
    <li class="text-center">
        <a href="{{ route('profile', auth()->user()) }}" class="font-black text-lg mb-4 block">
            Profile
        </a>
    </li>
    <li class="text-center">
        <form method="POST" action="/logout">
            @csrf

            <button class="font-bold text-lg">Logout</button>
        </form>
    </li>
</ul>
