<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>& Cat 保護猫情報サイト</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- ファビコン -->
    <link rel="icon" href="favicon2.ico">

    <!--css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body style="background-image: url(/img/login.jpg);background-size: cover;">

    <div id="app">

        <div class="navbar" style="padding-top:1px; width: 100%; height: 40px; background-color: white; justify-content: space-between;" >

          <div class="container" style="display:flex; justify-content: space-between;">
              <!-- Side Of Navbar -->
                <div class="box b1" style="width: 600px"><img src="img/logomoji.png"; style="width:14%; height:auto; margin-left:10px;" alt="アンドキャットのロゴです" ></div>
                <div class="box b2" style="margin:0 auto; " >
                    <ul style="margin-bottom:0px; display:flex; flex-direction:row; justify-content: space-between;">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item" style="width:100px; list-style: none">
                            <a class="nav-link" href="{{ route('login') }}" style="font-size:16px; color: black">ログイン</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item" style="width:100px; list-style: none">
                                <a class="nav-link" href="{{ route('register') }}" style="font-size:16px; color: black">会員登録</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown" style="list-style: none;">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:black; font-size:18px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>さん
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"   href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" style="color: black">
                                    {{ __('ログアウト') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                    </div>
                </div>
            </div>
          </div>
    </div>
</nav>



            {{-- <div class="container"> --}}
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                {{-- <button class="navbar-toggler" type="button"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
