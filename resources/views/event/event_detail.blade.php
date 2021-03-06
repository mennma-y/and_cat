@extends('head')
@section('title','イベント詳細')

@section('detail')

    <div class="container"  style="width: 900px; flex-direction:column">
        <div class="event-title" style="margin-top:70px;">
                <h4 style="text-align: center; font-weight:bold;">イベント情報　　詳細</h4>
        </div>
        <div class="event-text" style="margin-top: 50px;
            padding-left: 60px;">
            <p style="font-size: 20px;line-height: 30px;letter-spacing: 5px;">{{$event->category}}</p>
        </div>
        <div class="event-information" style="width: 100%;height:170px; text-align:center; border:solid 1px #eef;border-radius:50px;background-color:#FAE7F6;">
            <div class="text-content" style="padding-top:20px; margin-right:100px;">
                <h4>日時 : {{$event->event_date}}</h4>
                <p style="margin-left: 50px; font-size:18px;">場所 : {{$event->address}}

                </p>
                <p style="margin-right: 50px;font-size:18px;">{{$event->parttime}}</p>
                <div class="organaize-title" style="float: right;position: relative;bottom: 50px;left: 40px;border: solid 1px #fff;height: 50px;
                        border: solid 1px #fff ; padding: 10px 30px 56px 30px;border-radius: 50px;background-color: #fff;font-weight: bold;">
                    <p style="line-height: 40px;">{{$event->organize}}</p>
                </div>
            </div>
        </div>
        <div class="event-explain">
            <div class="event-title" style="margin-top:70px; height:50px;border-bottom:solid 5px #FAE7F6; ">
                    <h4 style="font-weight:bold;">イベント内容</h4>
            </div>
            <div class="event-explain-text" style="margin: 20px;">
                <p style="font-size: 20px;line-height:35px;">
                    {{$event->detail}}
                </p>
            </div>
        </div>
        <div class="event-map">
            <div class="event-title" style="margin-top:70px; height:50px;border-bottom:solid 5px #FAE7F6; ">
                        <h4 style="font-weight:bold;">会場マップ</h4>

            </div>
            <div class="event-adress" style="margin:10px 0 0 20px; text-align:center; font-size:20px; font-weight:bold;">
                <p style="font-size:20px;font-weight:bold;">{{$event->address}}</p>
                <div class="map-image" style="height: 300px;width: 90%;border: solid;margin: auto;">
                        MAP
                </div>
            </div>
        </div>
        <div class="other-event">
            <div class="event-title" style="margin-top:70px; height:50px;border-bottom:solid 5px #FAE7F6; ">
                        <h4 style="font-weight:bold;">その他のイベント</h4>

            </div>
            @include('common.table')
            <div class="event-pagination" style="width: 20%; margin:30px auto;">
                {{$events->links()}}
            </div>
        </div>
        <div class="font-yajirusi" style="text-align: center;height:125px;">
            <p style="font-size: 100px; font-weight:bold;">↓</p>
        </div>
        <div class="event-form-button" style="text-align: center;">
            <div class="event-form-button-detail"  style="width:60%; margin:auto; border: solid 1px #eef;padding: 20px; border-radius: 30px;
                background-color: #84D9D0;">
                <a href="{{route('event.form',['id'=>$event->id])}}" style="text-decoration: none; color:#fff; font-size:20px; font-weight:bold;">参加応募フォームへ</a>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection
{{-- </body>
</html> --}}
