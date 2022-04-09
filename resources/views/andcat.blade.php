<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="保護猫の情報です, width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>保護猫情報サイト・アンドキャットとは</title>

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
            </li>
            <li ><a href="{{ url('user') }}" class="member">プロフィール</a></li>
            <li ><a href="{{ url('cat/like') }}" class="like" >☆お気に入り</a></li>
           </ul>
        </div>
    </div>

        <div class="nav"><div class="pan"><a href="{{ url('home') }} ">ホーム</a><a> > </a><a href="{{ url('andcat') }} ">アンドキャットとは</a></div></div>


        <div class="main-photo">
         <img src="/img/andcat_main.jpg" alt="">
         <h1>一生の家族になる<br>保護猫のマッチングサイト</h1>
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
           <div class="container-main">
                <div class="logomoji2"><img src="/img/logomoji.png"></div>
                <div class="name">アンドキャット</div>
           </div>

           <div class="container-text">
            <p>アンドキャットは、保護猫と迎えたい人を結ぶマッチングサイトです。

                <br>幸せな家族を結ぶことで、殺処分問題の解決につなげることが私たちのミッションです。
                <br>私たちは、保護猫情報サイト「アンドキャット」を、新しい家族に安心して出会える場所にすることで、
                <br>保護猫と迎えたい人が”一生の家族”として結ばれるためのお手伝いをしていきます。</p></div>
            </div>

    <div class="main-text">
          <a>保護猫の迎え方</a>
        <div class="flow">
        <img src="/img/pet.png" alt=""></div>
    </div>

        <div class="main-text">
                <a>保護猫のいま</a>
            <div class="sub-photo">
                <img src="/img/andcat_second.jpg" alt="">
                <p class="main-text1">現在、日本では犬や猫の殺処分数は減少傾向にありますが、ここ数年の統計でも年間2〜3万匹もの犬猫に家族が見つからず、 殺処分されています(※ 環境省HP「平成16～令和2年度の犬・猫の引取り及び処分の状況」より)。
                    <br>特に猫については、犬に比べ殺処分数がまだまだ多く、実際に保護された約半分が殺処分されている状況です。
                    近年、「保護犬猫」「殺処分」という言葉は知られるようになってきました。実際に保護犬猫を迎えられる方は増えてきています。けれども、まだまだペットとして迎え入れる主な選択肢ではない状況です。
                    <br>アンドキャットは、迎えたい人と保護猫が出逢える場所をお手伝いすることで、殺処分の問題解決にもつなげていきたいと考えています。
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

