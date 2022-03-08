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
        <link href="{{ asset('css/login2.css') }}" rel="stylesheet">

    </head>

<body>
    <div class="container">
        <div class="nav"><div class="pan"><a>ホーム</a></div></div>

         <div class="main-photo">
         <img src="img/main1.jpg" alt="">
         <h1>保護猫を我が家に<br>ねこと暮らす</h1>
         </div>

        <div class="container-nav">
            <div class="logo"><img src="img/logo1.png"  alt="アンドキャットのロゴです"></div>
            <div class="box box1"><a href="#" target="_blank">アンドキャット<br>とは</a></div>
            <div class="box box2"><ul><li><img src="img/serch.png"></li><li><a href="#">保護猫を探す</li></div>
            <div class="box box3"><ul><li><img src="img/serch.png"></li><li><a href="#">譲渡会<br>イベントを探す</a></li></div>
            <div class="box box4"><ul><li><img src="img/hogoneko.png"></li><li><a href="#">保護猫団体の方へ</a></li></div>
        </div>

</body>

