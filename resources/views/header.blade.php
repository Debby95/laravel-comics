@php 

$navLinks = [
    [
        'name' => 'CHARACTERS',
        'href'=> '/header',
    ],
    [
        'name' => 'COMICS',
        'href' => '#',
    ],
    [
        'name' => 'MOVIES',
        'href' => '#',
    ],
    [
        'name' => 'TV',
        'href' => '#',
    ],
    [
        'name' => 'GAMES',
        'href' => '#',
    ],
    [
        'name' => 'COLLECTIBLES',
        'href' => '#',
    ],
    [
        'name' => 'VIDEOS',
        'href' => '#',
    ],
    [
        'name' => 'FANS',
        'href' => '#',
    ],
    [
        'name' => 'NEWS',
        'href' => '#',
    ],
    [
        'name' => 'SHOP',
        'href' => '#',
    ],
];

@endphp



<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/dc-logo.png') }}" 
                class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @foreach ($navLinks as $name)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $name['href'] }}">{{ $name['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

