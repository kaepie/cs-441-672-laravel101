<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index() {
        $songs = collect([
            [
                'id' => 1,
                'title' => 'Supernova',
                'image' => 'images/supernova.webp',
                'artist' => 'Aespa',
                'album' => 'Armageddon',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 11,
                ]
            ],
            [
                'id' => 2,
                'title' => 'Please Please Please',
                'image' => 'images/please.webp',
                'artist' => 'Sabrina Carpenter',
                'album' => 'Short n Sweet',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 06,
                ]
            ],
            [
                'id' => 3,
                'title' => 'APT',
                'image' => 'images/apt.webp',
                'artist' => 'ROSE',
                'album' => 'Dont know',
                'duration' => [
                    'minutes' => 2,
                    'seconds' => 49,
                ]
            ],
            [
                'id' => 4,
                'title' => 'Lonely in The City',
                'image' => 'images/pun.webp',
                'artist' => 'pun',
                'album' => 'pun',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 01,
                ]
            ],
            [
                'id' => 5,
                'title' => 'Golden Hour',
                'image' => 'images/golden_hour.webp',
                'artist' => 'Billkin',
                'album' => 'single',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 44,
                ]
            ],
            [
                'id' => 6,
                'title' => 'Dynamite',
                'image' => 'images/dynamite.webp',
                'artist' => 'BTS',
                'album' => 'Dynamite',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 19,
                ]
            ],
            [
                'id' => 7,
                'title' => 'Lovesick',
                'image' => 'images/lovesick.webp',
                'artist' => 'Niki',
                'album' => 'Moonchild',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 10,
                ]
            ],
        ]);
        return view('songs.index', [
            'songs' => $songs,
            'songs_count' => count($songs)
        ]);
    }
}
