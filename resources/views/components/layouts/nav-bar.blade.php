<nav class="flex border-gray-500 justify-around items-center py-1 shadow-md ">
    <div class="w-1/3 py-1 px-3 rounded-md flex flex-row border-[1px] border-[rgb(0,0,0,0.2)] justify-center items-center">
{{--        <div class="bg-[rgb(0,0,0,0.2)]">--}}
{{--        </div>--}}
        <div class="fa fa-apple text-3xl text-gray-500">
        </div>
    </div>

    <div class="space-x-4">

        @guest
            <a href="{{ route('login') }}" class="hover:text">Login</a>
            <a href="{{ route('register') }}" class="hover:text">Register</a>
        @else
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <div class="inline-block">
                    {{ auth()->user()->name }}
                </div>
                <button type="submit">Logout</button>
            </form>
        @endguest
    </div>
</nav>
