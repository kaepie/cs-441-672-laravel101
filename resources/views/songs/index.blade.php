<x-layouts.main>
    <div class="grid grid-cols-4 w-full p-9">
        <div class="col-span-1 ">
            <div class="container h-56 min-w-full  rounded-lg">
                <img src="{{ asset('images/image_album.webp') }}" alt="album" class="rounded-lg">
            </div>
        </div>
        <div class="col-span-3 w-full p-10">
            <h1 class="text-[#d60017] text-2xl" onclick="testFunction()"> Apple Music </h1>
            <p class="text-[rgb(0,0,0,0.5)] text-sm"> UPDATED FRIDAY </p>
        </div>
    </div>

    <h1 class="w-full flex flex-row justify-end px-9 text-[#d60017]">{{ $songs_count }} Songs</h1>

    <div class="mt-8 grid grid-cols-10 w-full py-3 px-9 max-lg:grid-cols-8 max-md:grid-cols-5 max-sm:grid-cols-2">
        <div class="col-span-3">
            <p> Song </p>
        </div>
        <div class="col-span-3 max-md:hidden">
            <p> Artist </p>
        </div>
        <div class="col-span-2 max-lg:hidden">
            <p> Album </p>
        </div>
        <div class="col-span-2 max-sm:hidden">
            <p> Time </p>
        </div>
    </div>

    <div class=" w-full h-px max-w-6xl mx-auto my-2"
         style="background-image: linear-gradient(90deg, rgba(149, 131, 198, 0) 1.46%, rgba(149, 131, 198, 0.6) 40.83%, rgba(149, 131, 198, 0.3) 65.57%, rgba(149, 131, 198, 0) 107.92%);">
    </div>

    <div class="mt-4 grid grid-cols-10 w-full px-6">
        @foreach($songs as $index => $song)
            <div class="{{ $loop->odd ? 'bg-[rgb(0,0,0,0.025)]' : '' }} col-span-10 grid grid-cols-10 max-lg:grid-cols-8 max-md:grid-cols-5 max-sm:grid-cols-2 py-3 px-3 hover:bg-[rgb(0,0,0,0.15)]">
                <div class="col-span-3 inline-flex">
                    <img src="{{ asset($song['image']) }}" alt="{{ $song['title'] }}" class="h-8 w-8 mr-3 rounded-md">
                    <p>{{ $song['title'] }}</p>
                </div>
                <div class="col-span-3 max-md:hidden">
                    <p>{{ $song['artist'] }}</p>
                </div>
                <div class="col-span-2 max-lg:hidden">
                    <p>{{ $song['album'] }}</p>
                </div>
                <div class="col-span-2 max-sm:hidden">
                    <p>{{ $song['duration']['minutes'] }}:{{ $song['duration']['seconds'] < 10 ? '0' . $song['duration']['seconds'] : $song['duration']['seconds']}}</p>
                </div>
            </div>
        @endforeach
    </div>


</x-layouts.main>
