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

    <title>イベント編集画面</title>
</head>
<body>
    <div class="container" style="width: 900px;">
        <h3 style="text-align: center;margin-top:30px;margin-bottom:20px;">イベント編集画面(管理者のみ)</h3>    
        <form action="{{route('event.delete',$event->id)}}" method="POST" style="width:30%; float:right;">
            @csrf
            <input type="submit" class="btn btn-danger" value="削除する">  
        </form>
        <form action="{{route('event.update', $event->id)}}" method="POST" style="width: 60%; margin:auto;">
            @csrf
            <div class="mb-3" style="margin-top:40px;">
                <label for="organize" class="form-label">団体名</label>
                <input type="text" class="form-control" value="{{($event->organize)}}" id="organize" name="organize" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">内容</label>
                <input type="text" class="form-control" value="{{$event->category}}" id="category" name="category" required>
            </div>
            <div class="mb-3">
                <label for="place" class="form-label">場所</label>
                <input type="text" class="form-control" value="{{$event->place}}" id="place" name="place" placeholder="例：松山" required>
            </div>
            <div class="mb-3">
                <label for="event_date" class="form-label">日時</label>
                <input type="text" class="form-control" id="event_date" value="{{$event->event_date}}" name="event_date" placeholder="例：2022-02-11" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">住所</label>
                <input type="text" class="form-control" id="adress" value="{{$event->address}}" name="address" placeholder="例：愛媛県松山市山越2丁目1番6号" required>
            </div>
            <div class="mb-3">
                <label for="parttime" class="form-label">イベント時間</label>
                <input type="text" class="form-control" id="parttime" value="{{$event->parttime}}" name="parttime" placeholder="例：13:00~15:00" required>
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">詳細</label>
                <textarea class="form-control" id="detail" name="detail" rows="4" required>{{$event->detail}}</textarea>
            </div>
            <div class="double-button" style="display: flex;align-items:flex-end;">
                <div class="create-button" style="padding: 20px 0 0 0;">
                    <input type="submit" class="btn btn-primary" value="編集する">
                </div>
                
                <div class="return-button" style="margin-left:20px;">
                    <a href="{{route('event.index')}}" class="btn btn-primary">戻る</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>