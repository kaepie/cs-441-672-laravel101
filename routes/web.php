<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return redirect()->route('about.index');
});

Route::get('/hello', function () {
    return route("hello");
})->name("hello");

Route::get('/hello/{name}', function ($name) {
    return "Hello {$name}";
})->name("hello.name");

Route::get('/hello/{name}/{age?}', function ($name,$age = null) {
    return [
        'greeting' => "Hello {$name}",
        'age' => $age
    ];
})->name("hello.age");

Route::get('about', [AboutController::class, 'index'])
    ->name('about.index');

Route::get('/songs', [SongController::class, 'index'])->name('songs.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/artists', ArtistController::class);

Route::resource('/playlists', PlaylistController::class);

require __DIR__.'/auth.php';


