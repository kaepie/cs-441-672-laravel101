<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CS442 - Songs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="grid grid-cols-layout min-h-screen">
    <!-- Sidebar -->
    <aside class=" flex flex-col justify-centerbg-[rgb(60,60,67,0.03)] p-6 border-[1px] border-solid border-[rgb(0,0,0,0.15)]">
        <x-nav.link route-name="about.index" href="{{ route('about.index') }}">
            <svg class="h-6 w-6 inline-block mr-4" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#FFFFFF" stroke="#FFFFFF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M789.333333 853.333333H234.666667l-128 128V256c0-70.4 57.6-128 128-128h554.666666c70.4 0 128 57.6 128 128v469.333333c0 70.4-57.6 128-128 128z" fill="#D60017"></path><path d="M469.333333 426.666667h85.333334v234.666666h-85.333334z" fill="#D60017FFFFFF"></path><path d="M512 320m-42.666667 0a42.666667 42.666667 0 1 0 85.333334 0 42.666667 42.666667 0 1 0-85.333334 0Z" fill="#D60017FFFFFF"></path></g></svg>
            About
        </x-nav.link>

        <x-nav.link :route-name="'songs.' . 'index'" :href="route('songs.index')" class="" title="absd" >
            <svg class="h-6 w-6 inline-block mr-4" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="" stroke=""><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#d60017;} </style> <g> <path class="st0" d="M443.643,0v326.061c0,23.864-26.356-3.965-78.048,1.992c-66.323,8.226-113.17,60.232-112.999,109.071 c0.17,48.874,54.068,81.851,120.338,73.616c78.156-3.75,128.035-54.562,127.855-103.445V0H443.643z"></path> <rect x="11.211" y="6.109" class="st0" width="347.942" height="59.254"></rect> <rect x="11.211" y="132.826" class="st0" width="347.942" height="59.253"></rect> <path class="st0" d="M11.211,386.257v59.246h187.8c-0.342-3.32-0.566-6.684-0.574-10.101c-0.054-17.019,3.57-33.607,10.19-49.144 H11.211z"></path> <path class="st0" d="M342.809,290.698c5.589-0.637,10.998-0.951,16.345-1.05v-30.106H11.211v59.244h255.136 C288.381,304.234,314.505,294.205,342.809,290.698z"></path> </g> </g></svg>
            Songs
        </x-nav.link>

        <x-nav.link :route-name="'artists.' . 'index'" :href="route('artists.index')" >
            Artists
        </x-nav.link>

        <x-nav.link :route-name="'playlists.' . 'index'" :href="route('playlists.index')" >
            Playlist
        </x-nav.link>
    </aside>

    <!-- Main Content -->
    <section class="bg-white h-full overflow-y-scroll">
        <x-layouts.nav-bar></x-layouts.nav-bar>
        <div class="my-4 flex flex-col items-center">
            {{ $slot }}
        </div>
    </section>
</body>
</html>
