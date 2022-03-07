@extends('nishiyama')

@section('main')
<div class="image-box">
    <div class="image-main">
        <div class="image">
            <img src="{{ Storage::url($image_main->image_path) }}" class="cat-main" alt="メインフォト">
        </div>
    </div>
    <div class="image-sub-box">
        @foreach($images_sub as $image_sub)
        <div class="image-sub">
            <div class="image">
                <img src="{{ Storage::url($image_sub->image_path) }}" class="cat-sub" alt="サブフォト">
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="pink-box">
    <div class="like-box like-js" data-cat-id="{{ $cat->id }}" data-like-id="#">
        <p class="pink">☆お気に入りに追加する</p>
    </div>
    @if($cat->gender === 0)
    <div class="name-box">
        <p>名前：<span class="name">{{ $cat->name }}くん</span></p>
        <p>譲渡エリア：<span>{{ $cat->area }}</span></p>
        <p>性別：<span>オス</span><span class="gender-icon">♂</span></p>
        @if(isset($cat->age_about))
        <p>年齢：<span>推定{{ $cat->age }}</span></p>
        @else
        <p>年齢：<span>{{ $cat->age }}</span></p>
        @endif
        <p>種類：<span>{{ $cat->type }}</span></p>
    </div>
    @elseif($cat->gender === 1)
    <div class="name-box">
        <p>名前：<span class="name">{{ $cat->name }}ちゃん</span></p>
        <p>譲渡エリア：<span>{{ $cat->area }}</span></p>
        <p>性別：<span>メス</span><span class="gender-icon">♀</span></p>
        @if(isset($cat->age_about))
        <p>年齢：<span>推定{{ $cat->age }}</span></p>
        @else
        <p>年齢：<span>{{ $cat->age }}</span></p>
        @endif
        <p>種類：<span>{{ $cat->type }}</span></p>
    </div>
    @endif
</div>
<div class="profile-box">
    <div class="profile-text">
        <p class="main">●自己紹介</p>
        <p>{{ $cat->introduction }}</p>
        <a href="#">
            <div class="user-home">
                <p>保護団体のHPへ</p>
                <div class="black-cat">
                    <img src="{{ asset('/img/cat_black.png') }}" alt="黒猫アイコン">
                </div>
            </div>
        </a>
    </div>
</div>
<div class="green-box">
    <div class="arrow"></div>
    <a href="{{ url('/form') }}">
        <div class="next-form">
            <p>応募フォームへ</p>
        </div>
    </a>
</div>

<div class="question-box">

    <h2 class="question-title">質問はこちらから</h2>
    @if ($errors->any())
    <div class="alert-danger">
        <ul class="form-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/question_send" method="post">
        @csrf
        <input type="text" name="question" class="question">
        <input type="submit" value="質問する">
    </form>
    @foreach($questions as $question)
        <div class="card w-75 mx-auto rounded-pill mt-5">
      
            <div class="card-body">
                <form action="">
                    <input type="text">
<input type="submit" value="返信">
</form>
                {{$question ->user->name}}
                {{$question -> question}}


            </div>
       
        </div>
        @endforeach
</div>

@endsection