<x-layouts.main>

    @can('create', \App\Models\Artist::class)
        <div class="w-full flex flex-row justify-start p-10">
            <a href="{{ route('artists.index') }}" class="bg-[#d60017] text-white px-4 py-2 rounded-md"> Back to Artists </a>
        </div>
    @endcan

    <h1 class="text-5xl">
        Create New Artist
    </h1>
    <form action="{{ route('artists.store') }}" method="POST" class="" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-row gap-4 justify-center items-center my-4 ">
            <label for="artist_name" class=""> Artist Name </label>
            <input value="{{ old('name') }}" type="text" id="artist_name" name="name" class="rounded-md border-[1px] @error('name') border-red-500 @else border-gray-500 @enderror">
        </div>

        @error('name')
            <p class="text-red-500"> {{ $message }} </p>
        @enderror

        <div>
            <label for="artist_image" class=""> Artist Image </label>
            @error('image')
                <p class="text-red-500"> {{ $message }} </p>
            @enderror
            <input type="file" id="artist_image" name="image">
        </div>

        <div class="my-4">
            <button type="submit" class="py-4 px-2 bg-[#d60017] rounded-xl shadow-md text-white"> Create </button>
        </div>
    </form>



</x-layouts.main>
