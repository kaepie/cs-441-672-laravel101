<x-layouts.main>

    <h1 class="text-5xl"> Artists </h1>

    <div class="my-4">
        <a href="{{ route('artists.create') }}" class="px-4 py-2 bg-[#d60017] rounded-xl shadow-md text-white"> Create New Artists</a>
    </div>

    @foreach($artists as $artist)

        <a href="{{ route('artists.show' , ['artist' => $artist]) }}" class="">
            <div class="">
                <img src="{{ $artist->artist_image }}" alt="" class="">
                <p> {{ $artist->name }}</p>
            </div>
        </a>
    @endforeach

    <div>
        {{ $artists->links() }}
    </div>

</x-layouts.main>
