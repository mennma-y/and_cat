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

    <title>イベントお問い合わせ画面</title>
</head>
<body>
    <div class="container">
        <div class="title" style="text-align:center; margin-top:30px; margin-bottom:30px;">
            <h2>こちらのイベントに参加します！</h2>
        </div>
        <div class="sub-title" style="width: 60%;margin:auto;padding-bottom:30px;">
            <p style="font-size: 20px;border-bottom:5px solid #FAE7F6;padding-top:10px;">※以下の内容のイベントでお間違いありませんか？</p>
        </div>
        <div class="event-table">
            <table class="table table-striped" style="width: 60%; margin:auto;">
                <tr>
                <th style="background-color:#84D9D0;">団体名</th>
                <td style="background-color:#84D9D0;font-weight:bold;">{{$event->organize}}</td>
                </tr>
                <tr>
                <th style="background-color: #FAE7F6;">内容</th>
                <td style="background-color: #FAE7F6;font-weight:bold;">{{$event->category}}</td>
                </tr>
                <tr>
                    <th style="background-color:#84D9D0;">日時</th>
                    <td style="background-color:#84D9D0;font-weight:bold;">{{$event->event_date}}</td>
                </tr>
                <tr>
                    <th style="background-color: #FAE7F6;">場所</th>
                    <td style="background-color: #FAE7F6;font-weight:bold;">{{$event->place}}</td>
                </tr>
                <tr>
                    <th style="background-color:#84D9D0;">イベント時間</th>
                    <td style="background-color:#84D9D0;font-weight:bold;">{{$event->parttime}}</td>
                </tr>
                <tr>
                    <th style="background-color: #FAE7F6;">申込者名</th>
                    <td style="background-color: #FAE7F6;font-weight:bold;">{{$user->name}}</td>
                </tr>

            </table>
        </div>
        <div class="take-part-in-button" style="margin-top: 60px;text-align:center;">
            <form action="#">
                <a href="{{route('event.index')}}" style="background-color: #84D9D0; color:#fff; border:1px solid #eef; font-weight:bold;border-radius:30px;padding:20px;" class="btn">イベントに参加する</a>
            </form>
        </div>
        <div class="return-btn" style="margin-top: 30px; text-align:center;">
            <a href="{{route('event.index')}}" style="padding: 10px 20px 10px 20px;border: solid 1px #eef;border-radius: 30px;
                background-color: #FAE7F6;font-weight:bold;color:#fff;" class="btn btn-primary">戻る</a>
        </div>


    </div>
</body>
</html>
