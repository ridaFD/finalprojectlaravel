<x-app>
    <div style="display: flex; height: 100vh;">
        <div class="container items-center">
            <div class="flex justify-center">

                <dev class="text-blue-500 text-6xl">Tweety</dev>


                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="">Login</a>
                        <a href="{{ route('register') }}" class="">Register</a>
                    @endif
                @endif

            </div>
        </div>
    </div>
</x-app>
