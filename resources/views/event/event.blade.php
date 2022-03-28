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

