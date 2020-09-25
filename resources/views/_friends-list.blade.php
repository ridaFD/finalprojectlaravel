<h3 class="font-bold text-lg mb-4">Friends</h3>

<ul>
    @foreach(range(1, 8) as $index)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img
                    src="http://lorempixel.com/40/40"
                    alt=""
                    class="rounded-full mr-2"
                >
                Rida Fd
            </div>
        </li>
    @endforeach
</ul>
