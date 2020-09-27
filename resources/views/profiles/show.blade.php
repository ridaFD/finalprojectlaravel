<x-app>
<header class="mb-6 relative">
    <img
        src="{{ asset('images/default-profile-banner.jpg') }}"
        alt=""
        class="mb-2"
    >

    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div>
            <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
        </div>
    </div>

    <p class="text-xs">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet aperiam debitis
        deleniti distinctio enim est, eveniet explicabo incidunt libero magnam magni,
        nam nostrum numquam quas ratione rem repudiandae tenetur?
    </p>

    <img
        src="{{ $user->avatar }}"
        alt=""
        class="rounded-full mr-2 absolute"
        style="width: 130px; left: 50%; transform: translateX(-50%); top: 35%;"
    >
</header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>
