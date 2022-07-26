@php 
$FooterDCComicsLink = [
    [
        'name' => 'Characters',
    ],
    [
        'name' => 'Comics',
    ],
    [
        'name' => 'Movies',
    ],
    [
        'name' => 'TV',
    ],
    [
        'name' => 'Games',
    ],
    [
        'name' => 'Videos',
    ],
    [
        'name' => 'News',
    ],
];


$FooterDCLink = [
    [
        'name' => 'Terms Of Us',
    ],
    [
        'name' => 'Privacy policy (New)',
    ],
    [
        'name' => 'Ad Choise',
    ],
    [
        'name' => 'Advertising',
    ],
    [
        'name' => 'Jobs',
    ],
    [
        'name' => 'Subsciptions',
    ],
    [
        'name' => 'Talent Workshops',
    ],
    [
        'name' => 'CPSC Certificates',
    ],
    [
        'name' => 'Ratings',
    ],
    [
        'name' => 'Shop Help',
    ],
    [
        'name' => 'Contact Us',
    ],
];

$SitesLink = [
    [
        'name' => 'DC',
    ],
    [
        'name' => 'MAD Magazine',
    ],
    [
        'name' => 'DC Kids',
    ],
    [
        'name' => 'DC Universe',
    ],
    [
        'name' => 'DC Pover Visa',
    ],
];

$ShopLink = [
    [
        'name' => 'Shop DC',
    ],
    [
        'name' => 'Shop DC Collectibles',
    ]
];

@endphp

<footer>
    <div class="container">
        <div class="row mb-5">
            <div class="col col-lg-2">
                <h5>DC COMICS</h5>
                <ul>
                    @foreach ($FooterDCComicsLink as $name)
                        <li>{{ $name['name'] }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col col-lg-2">
                <h5>DC</h5>
                <ul>
                    @foreach ($FooterDCLink as $name)
                        <li>{{ $name['name']}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col col-lg-2">
                <h5>SITES</h5>
                <ul>
                    @foreach ($SitesLink as $name)
                        <li>{{ $name['name']}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-down col-lg-2">
                <h5>SHOP</h5>
                <ul>
                    @foreach ($ShopLink as $name)
                        <li>{{ $name['name']}}</li>
                    @endforeach
                </ul>
            </div>
            <img class="img-footer" src="/img/dc-logo-bg.png" alt="">
        </div>
        <div>All Site Content TM and 2020 DC Entertainment, unless otherwise noted here. All rights reserved.</div>
        <div>Cookie Settings</div>
    </div>
</footer>

<style>
    footer {
        background-image: url("img/footer-bg.jpg");
        color: white;
        padding: 10px;
        height: 500px;
        background-repeat: round;
    }

    ul {
        list-style-type: none;
    }

    li {
        color: grey;
        text-align: start;
    }

    .img-footer {
        width: 400px;
    }

    .col-down {
        position: relative;
        top: 300px;
        right: 650px;
    }

</style>