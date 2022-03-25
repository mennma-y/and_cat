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
        <link href="{{ asset('css/andcat.css') }}" rel="stylesheet">

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

        <div class="nav"><div class="pan"><a>ホーム</a></div></div>

        <div class="main-photo">
         <img src="img/andcat_main.jpg" alt="">
         <h1>一生の家族になる<br>保護猫のマッチングサイト</h1>
         </div>

        <div class="container-nav">
            <div class="logo"><img src="img/logo1.png"  alt="アンドキャットのロゴです"></div>
            <div class="box box1"><a href="#" target="_blank">アンドキャット<br>とは</a></div>
            <div class="box box2"><ul><li><img src="img/serch.png"></li><li><a href="#">保護猫を探す</li></div>
            <div class="box box3"><ul><li><img src="img/serch.png"></li><li><a href="{{route('event.index')}}">譲渡会<br>イベントを探す</a></li></div>
            <div class="box box4"><ul><li><img src="img/hogoneko.png"></li><li><a href="#">保護猫団体の方へ</a></li></div>
        </div>

     <div class="">
         <div class="">
           <div class="container-main">
                <div class="logomoji2"><img src="img/logomoji.png"></div>
                <div class="name">アンドキャット</div>
           </div>

           <div class="container-text">
            <p>アンドキャットは、保護犬猫と迎えたい人を結ぶマッチングサイトです。

                <br>幸せな家族を結ぶことで、殺処分問題の解決につなげることが私たちのミッションです。</p></div>
            </div>
        </div>

        <div class="">

         </div>
    </div>

    <div class="main-text">
          <a>保護猫の迎え方</a>
        <div class="flow">
        <img src="img/pet.png" alt=""></div>
    </div>

        <div class="main-text">
                <a>保護猫のいま</a>
            <div class="sub-photo">
                <img src="img/andcat_second.jpg" alt="">
                <p class="main-text1">日本では年間3.3万匹もの犬猫が家族が見つからず、 殺処分されています(※1)。「保護犬猫」「殺処分」という言葉は知られるようになってきました。しかし、 実際に保護犬猫から迎えた方は犬7.4%、猫11.6%と、まだまだ主な選択肢ではない状況です。
                    私たちはアンドキャットを新しい家族に安心して出会える場所にすることで、 保護犬猫と迎えたい人が”一生の家族”として結ばれるためのお手伝いをしていきます。
                    ※1 R1 環境省「犬・猫の引取り及び負傷動物の収容状況」※2 H30 一般社団法人ペットフード協会「全国犬猫飼育実態調査」（シェルターからの譲渡・里親探しのマッチングサイトからの譲渡を合算した数値）
                </p>
            </div>
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

