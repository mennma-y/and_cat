<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="保護猫の情報です, width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>& Cat 保護猫情報サイト</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- ファビコン -->
        <link rel="icon" href="favicon2.ico">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('css/home1.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/cat.css') }}">
        <link rel="stylesheet" href="{{ asset('css/question.css') }}">

        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" defer></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" defer></script>
        <script src="{{ mix('js/like.js') }}" defer></script>

    </head>

<body>

        <div class="container">
                <div class="logomoji"><a href="{{ url('home') }} "><ruby><img src="/img/logomoji.png" alt="アンドキャットのロゴです"><rt>アンドキャット</rt></ruby></div>
                <div class="box text1"><a>猫の里親募集情報サイト</a><br><p>保護猫と飼い主をつなぐ</p></div>
                <div class="box text2">
                <figure>

                    <img src="{{ Auth::user()->img_url }}">

                    <figcaption><a class="name">{{ Auth::user()->name }}</a>さん</figcaption></figure>
                   <ul>
                    <li ><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('ログアウト') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                            @csrf
                        </form>
                    </li>
                    <li ><a href="{{ url('user') }}" class="member">プロフィール</a></li>
                    <li ><a href="{{ url('cat/like') }}" class="like" >☆お気に入り</a></li>
                   </ul>
                </div>
        </div>

        <div class="nav"><div class="pan"><a href="{{ url('home') }} ">ホーム</a></div></div>

         <div class="main-photo">
         <img src="/img/main1.jpg" alt="">
         <h1>保護猫を我が家に<br>ねこと暮らす</h1>
         </div>

        <div class="container-nav">
            <div class="logo"><a href="{{ url('home') }}"><img src="/img/logo1.png"  alt="アンドキャットのロゴです"></div>
            <div class="box box1"><a href="{{ url('andcat') }} ">アンドキャット<br>とは</a></div>
            <div class="box box2"><ul><a href="{{ url('search') }}"><li><img src="/img/serch.png"></li><li>保護猫を探す</li></ul></div>
            <div class="box box3"><ul><a href="{{ url('event') }}"><li><img src="/img/serch.png"></li><li>譲渡会<br>イベントを探す</a></li></ul></div>

                @if($user->admin_confirmation === 1)
                <div class="box box4"><ul><a href="{{ url('dantai') }}"><li><img src="/img/hogoneko.png"></li>
                    <li><a href="{{ url('dantai') }}">保護猫団体の方へ</a></li><li><p>登録団体専用ページです</p></li></ul></div>
                @else
                <div class="circle box5"><ul><li><img src="/img/people1.png"></li>
                    <a href="{{ url('home') }}"></a></ul></div>
                @endif

        </div>

        <div class="main">
            @yield('main')

        </div>

        <div class="que">
            @yield('ques')
        </div>

        <div class="footer">
            <div class="info">
            <ul>
                <li>運営会社</li><li>｜</li>
                <li>利用規約</li><li>｜</li>
                <li>お問い合わせ</li><li>｜</li>
                <li>プライバシーポリシー</li><li>｜</li>
                <li>特定表取引に関する表記</li>
            </ul>
            </div><br>
            <div class="mark">
            <p>2022 ©️ & Cat (アンドキャット)</p>
            </div>
        </div>

        <script>
            'use strict'
            document.addEventListener('DOMContentLoaded', function() {
                $('.js-popover').popover();
            }, false);
        </script>

</body>

