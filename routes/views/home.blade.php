<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        @include('header')
    </header>

    <main>
        <div class="jumbotron">
            <button class="current-series bg-primary text-white">CURRENT SERIES</button>
        </div>
        
        
        @yield('page_content')
    </main>

    <footer>
        @include('footer')
    </footer>
    <div class="sign-up pt-3 pb-3">
        <button class="sign-up-btn text-white">SIGN-UP NOW!</button>
        <ul class="d-flex">
          <li class="fs-5 fw-bold follow-us">FOLLOW US</li>
          <li>
            <a href="">
              <img class="logo-social" src="/img/footer-facebook.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <img class="logo-social" src="/img/footer-twitter.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <img class="logo-social" src="/img/footer-youtube.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <img class="logo-social" src="/img/footer-pinterest.png" alt="">
            </a>
          </li>
          <li>
            <a href="">
              <img class="logo-social" src="/img/footer-periscope.png" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
</div>
</body>
</html>

<style>
    main {
        background-color: #212529;
    }
    .jumbotron {
        background-image: url(img/jumbotron.jpg);
        height: 410px;
    }

    .current-series {
        position: relative;
        top: 390px;
        left: 330px;
        border: none;
        padding: 10px 25px;
    }

    .sign-up-btn {
        border: 2px solid rgb(66, 112, 238);
        background-color: transparent;
        margin: 10px 10px;
    }

    .follow-us {
        color: rgb(66, 112, 238);
        margin-top: 15px;
        margin-right: 20px;
    }

    .logo-social {
        margin: 10px 10px;
    }

    .img-blue-banner {
        width: 25px;
    }

    .img-title {
        font-size: 15px;
        margin-left: 5px;
    }

    .sign-up {
        background-color: #2F2F2F;
        display: flex;
        justify-content: space-around;
        padding-top: 20px;
    }
</style>