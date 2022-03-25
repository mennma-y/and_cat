<title>イベント画面</title>

@extends('head')

@section('event')
    <div class="container" style="width: 900px; flex-direction:column; ">
        <div class="event-title" style="margin-top:70px;">
                <h4 style="text-align: center; font-weight:bold;">イベント情報一覧</h4>
        </div>
        <div class="event-text" style="margin-top: 70px;
            padding-left: 60px;">
            <p style="font-size: 20px;line-height: 30px;letter-spacing: 5px;">保護された猫の譲渡会からしつけ会や勉強会まで。
                <br>さまざまなベント情報が満載！</p>
        </div>

        @if($user->admin_confirmation === 1)
            <div class="create-event">
                    <a href="{{ route('event.create') }}" class="btn btn-primary">新規作成</a>
            </div>
        @endif

        @include('common.table')
        <div class="event-pagination" style="width: 20%; margin:30px auto;">
            {{$events->links()}}
        </div>
    </div>
@endsection

{{-- </body>
</html> --}}


{{--
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>イベント画面</title>
</head>

<body>
    <header>
        <div class="event-header" style="width: 100%; background-color:#84D9D0;">
            <h4 style="width:30%; margin-left :90px;">&cat > イベント</h4>
        </div>
    </header>
    <div class="container" style="width: 900px;">
        <div class="box-container" style="display: flex;">
            <div class="logo-image" style="width: 10%;">
                <img src="/image/logo-Image.png" alt="" style="width: 100%;">
            </div>
            <div class="and-cat" style="margin:auto;border: solid 1px #eef;border-radius: 50%;
                background-color: #84D9D0;padding: 50px 10px 50px 10px;">
                <a href="#" style="text-decoration: none; color:black; font-weight:bold; ">アンドキャットとは</a>
            </div>
            <div class="serch-hogoneko" style="margin:auto;border: solid 1px #eef;border-radius: 50%;
                background-color: #FAE7F6;padding: 50px 40px 50px 40px;">
                <a href="#"style="text-decoration: none;color:black;font-weight:bold;">保護猫を探す</a>
            </div>
            <div class="serch-event" style="margin:auto;border: solid 1px #eef;border-radius: 50%;
                background-color:  #84D9D0;padding: 30px 40px 50px 40px;">
                <a href="{{route('event.index')}}"style="text-decoration: none;color:black;font-weight:bold;">譲渡会<br>イベントを探す</a>
            </div>
            <div class="adminer" style="margin:auto;border: solid 1px #eef;border-radius: 50%;
                background-color: #FAE7F6;padding: 50px 40px 50px 40px;">
                <a href="#"style="text-decoration: none;color:black;font-weight:bold;">保護団体の方へ</a>
            </div>


        </div>

        <div class="event-title" style="margin-top:70px;">
                <h4 style="text-align: center; font-weight:bold;">イベント情報一覧</h4>
        </div>
        <div class="event-text" style="margin-top: 70px;
            padding-left: 60px;">
            <p style="font-size: 20px;line-height: 30px;letter-spacing: 5px;">保護された猫の譲渡会からしつけ会や勉強会まで。
                <br>さまざまなベント情報が満載！</p>
        </div>

        @if($user->admin_confirmation === 1)
            <div class="create-event">
                    <a href="{{ route('event.create') }}" class="btn btn-primary">新規作成</a>
            </div>
        @endif


        @include('common.table')
        <div class="event-pagination" style="width: 20%; margin:30px auto;">
            {{$events->links()}}
        </div>
    </div>
</body>
</html> --}}
