<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="保護猫の情報です, width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>保護猫団体の方へ</title>

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
        <div class="logomoji"><ruby><img src="/img/logomoji.png" alt="アンドキャットのロゴです"><rt>アンドキャット</rt></ruby></div>
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

        <div class="nav"><div class="pan"><a href="{{ url('home') }} ">ホーム</a><a> > </a><a href="{{ url('dantai') }} ">保護猫団体の方へ</a></div></div>

         <div class="main-photo">
             <img src="/img/dantai_main.jpg" alt="">
                <h3>きっと見つかる、新しい家族。</h3>

                <div class="select">
                    <div class="cat"><a href="/admin/cat/register">保護猫投稿フォームへ<img src="/img/kamera.png"></a></div>
                    <div class="info"><a href="{{ route('event.create')}}">譲渡会・イベントなどの<br>投稿フォームへ<img src="img/memo.png"></a></div>
                    <div class="dantai"><a href="/admin">里親応募者さま一覧<img src="/img/dantai1.png"></a></div>
                </div>
         </div>

         <div class="container-nav">
            <div class="logo"><a href="{{ url('home') }}"><img src="/img/logo1.png"  alt="アンドキャットのロゴです"></div>
            <div class="box box1"><a href="{{ url('andcat') }} ">アンドキャット<br>とは</a></div>
            <div class="box box2"><ul><li><img src="/img/serch.png"></li><li><a href="{{ url('search') }}">保護猫を探す</li></div>
            <div class="box box3"><ul><li><img src="/img/serch.png"></li><li><a href="{{ url('event') }}">譲渡会<br>イベントを探す</a></li></div>

                @if($user->admin_confirmation === 1)
                <div class="box box4"><ul><li><img src="/img/hogoneko.png"></li>
                    <li><a><a href="{{ url('dantai') }}">保護猫団体の方へ</a></li><li><p>登録団体専用ページです</p></li></div>
                @else
                <div class="circle box5"><ul><li><img src="/img/people1.png"></li>
                    <a href="{{ url('home') }}"></a></ul></div>
                @endif

        </div>

        <div class="container-main">
                <div class="logomoji2"><img src="/img/logomoji.png"><br>アンドキャットが<br>できること</div>

                <div class="word">
                    <a>アンドキャットは、保護猫 と迎えたい人を結ぶマッチングサイトです。<br>
                    保護団体さまも応募者さまも、募集登録された犬猫たちに素敵な家族が見つかるよう、情報発信をお手伝いします。</a>
                    <ul>
                        <li>
                        保護団体さまと里親を希望される方のコミュニケーションは、アンドキャットのチャット機能を通じて行うことができます。
                        </li>
                        <li>
                        募集中の猫が一覧で見られるだけでなく、イベント情報の発信や、団体のさまの活動紹ページとしてご利用していただくことも可能です。
                        </li>
                    </ul>
                </div>
        </div>

       <div class="container-text" >
        <div class="title-box2">
          <div class="title-box2-title">「保護猫登録フォーム」</div>
          <p>「保護猫登録フォーム」より保護猫の募集登録を行うことができます。登録した保護猫の情報はあとからでも修正が可能です。
            また、里親を検討されている方々と質問ができるチャット機能もありますので、応募者様と直接繋がることができます。</p>
        </div>

        <div class="title-box2">
            <div class="title-box2-title">「譲渡会・イベントなどの投稿フォーム」</div>
            <p>団体様のさまざまなイベントの情報を発信することができます。
                「譲渡会・イベントなどの投稿フォームへ」のボタンより、情報発信したいイベントの詳細をご自身で入力ができますので、ご自由にご活用ください。
                また、登録したイベントの情報は後からでも修正が可能です。</p>
          </div>

          <div class="title-box2">
            <div class="title-box2-title">「里親応募者さま一覧」</div>
            <p>保護猫団体様が紹介した保護猫へ応募があった方のリストが表示されます。
                保護猫団体の方は、「里親応募者さま一覧」を常時確認していただき、応募一覧に掲載された応募者のメールアドレス・電話番号から連絡をして、
                書類審査・お見合いの日程調整・トライアルの調整を行ってください。また、里親希望の方へは、応募フォームから申し込みが入ると、登録したメールアドレスに応募完了のお知らせメールが送信されます。 </p>
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

