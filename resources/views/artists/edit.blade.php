<x-layouts.main>

    <h1 class="text-5xl">
        Edit New Artist
    </h1>

    <form action="{{ route('artists.update', ['artist' => $artist]) }}" method="POST" class="">
        @csrf
        @method('PUT')

        <div class="flex flex-row gap-4 justify-center items-center my-4 ">
            <label for="artist_name" class=""> Artist Name </label>
            <input type="text" value="{{ $artist->name }}" id="artist_name" name="name" class="rounded-md">
        </div>

        <div class="my-4">
            <button type="submit" class="w-full py-4 px-2 bg-[#d60017] rounded-xl shadow-md text-white"> Edit </button>
        </div>
    </form>

    <div class="mt-8">

        <h2 class="text-4xl text-[#d60017]"> Danger Zone </h2>

        @if(session('error'))
            <p class="font-bold text-[#d60017]"> {{ session('error')  }} </p>
        @endif

        <form action="{{ route('artists.destroy' , ['artist' => $artist]) }}" method="post">
            @csrf
            @method('DELETE')

            <button type="submit" class="w-full py-2 px-2 bg-[#d60017] rounded-xl shadow-md text-white my-4">
                Delete this artist
            </button>
        </form>
    </div>

</x-layouts.main>
