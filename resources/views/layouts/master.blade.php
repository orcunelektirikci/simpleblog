<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>

<header>
    <div class="blog-header">
        <div class="container container-fluid">
            <h1 class="blog-title">Blog Sayfası</h1>
            <a class="header-link" href="/">Anasayfa</a>
            @guest
            <a class="header-link" href="{{route('login')}}">Giriş Yap</a>
            <a class="header-link" href="{{route('register')}}">Üye Ol</a>
            @endguest
            @auth
            <a class="header-link" href="{{route('posts.create')}}">Blog Yaz</a>
            <a class="header-link" href="{{route('category.create')}}">Kategori Ekle</a>

            {{--<a class="header-link" href="{{route('logout')}}">Çıkış Yap</a>--}}
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Çıkış Yap</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            @endauth
        </div>
    </div>
</header>
<main role="main" class="container col-sm-9">
    <div class="row">
        <div class="col-sm-8 blog-main">


                    @yield('content')

        </div><!-- /.blog-main -->
    </div><!-- /.row -->

                    @include('layouts.sidebar')
</main><!-- /.container -->



    <script src="{{asset('js/custom.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>