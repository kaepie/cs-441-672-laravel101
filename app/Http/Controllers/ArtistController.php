<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtistRequest;
use App\Models\Artist;
use App\Repositories\ArtistRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ArtistController extends Controller
{

    public function __construct(
        private ArtistRepository $artistRepository
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = $this->artistRepository->get();

        return view('artists.index', ['artists' => $artists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create',Artist::class);
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtistRequest $request)
    {
        Gate::authorize('create',Artist::class);

//        $validated = $request->validate([
//            'name' => 'required|min:3|max:255|unique:artists',
//        ]);

        $validated = $request->validated();

        $name = $request->input('name');
        $file = $request->file('image');
        $filename = time().'_'.$file->getClientOriginalName();

        $path = $file?->storeAs('artists',$filename, 'public');

        $artist =  $this->artistRepository->create(['name' => $name, 'image_path' => $path]);
        return redirect()->route('artists.show', ['artist' => $artist]);
    }

    /**
     * Display the specified resource.
     */

    public function show(Artist $artist)
    {
        return view('artists.show', [
            'artist' => $artist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        Gate::authorize('update',Artist::class);
        return view('artists.edit', ['artist' => $artist]);
    }

    /**v
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        Gate::authorize('update',Artist::class);
        $name = $request->input('name');

        $this->artistRepository->update(['name' => $name], $artist->id);
        return redirect()->route('artists.show', ['artist' => $artist]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        if($artist->songs->count() > 0) {
            return redirect()->route('artists.show', ['artist' => $artist])
                ->with('error', 'Artist with songs exists cannot be deleted');
        }

        $this->artistRepository->delete($artist->id);
        return redirect()->route('artists.index');
    }
}
