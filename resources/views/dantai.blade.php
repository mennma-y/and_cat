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
        <link href="{{ asset('css/dantai.css') }}" rel="stylesheet">

    </head>

<body>

        <div class="container">
                <div class="logomoji"><ruby><img src="img/logomoji.png" alt="アンドキャットのロゴです"><rt>アンドキャット</rt></ruby></div>
                <div class="box text1"><a>猫の里親募集情報サイト</a><br><p>保護猫と飼い主をつなぐ</p></div>
                <div class="box text2"><img src="img/man.png">
                   <ul>
                    <li ><a class="name">ニックネームさん</li>
                    <li ><a href="{{ url('') }}" class="member">会員情報</a></li>
                    <li ><a href="{{ url('') }}" class="like" >☆お気に入り</a></li>
                   </ul>
                </div>
        </div>

        <div class="nav"><div class="pan"><a>ホーム</a><a>＞保護猫団体の方へ</div></div>

         <div class="main-photo">
             <img src="img/dantai_main.jpg" alt="">
                <h1>きっと見つかる、新しい家族。</h1>

                <div class="select">
                    <div class="cat"><p>保護猫投稿フォームへ<img src="img/kamera.png"></p></div>
                    <div class="info"><p>譲渡会・イベントなどの<br>投稿フォームへ<img src="img/memo.png"></p></div>
                </div>
         </div>


        <div class="container-nav">
            <div class="logo"><img src="img/logo1.png"  alt="アンドキャットのロゴです"></div>
            <div class="box box1"><a href="#" target="_blank">アンドキャット<br>とは</a></div>
            <div class="box box2"><ul><li><img src="img/serch.png"></li><li><a href="#">保護猫を探す</li></div>
            <div class="box box3"><ul><li><img src="img/serch.png"></li><li><a href="#">譲渡会<br>イベントを探す</a></li></div>
            <div class="box box4"><ul><li><img src="img/hogoneko.png"></li><li><a href="#">保護猫団体の方へ</a></li></div>
        </div>

        <div class="container-main">
                <div class="logomoji2"><img src="img/logomoji.png"></div>
                <div class="name">アンドキャットができること</div>
        </div>

        <div class="container-text">
            <p>アンドキャットは、保護犬・保護猫 と迎えたい人を結ぶマッチングサイトです。 保護団体さまも応募者さまも安心して利用できる場所であるために、審査登録制のシステムをとっております。 登録制のシステムをとっております。 募集登録された犬猫たちに家族ができるよう、情報発信をお手伝いします。
            </p></div>

        <div class="main-text">
                <a>保護猫の迎え方</a>
            <div class="flow">
                <img src="img/flow.png" alt=""></div>
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
</body>

