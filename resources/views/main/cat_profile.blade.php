@extends('head')
@section('title','保護猫プロフィール')

@section('main')
<div class="image-box">
    <div class="image-main">
        <div class="image">
            <img src="{{ Storage::url(optional($cat->catImageMain())->image_path) }}" class="cat-main" alt="メインフォト">
        </div>
    </div>
    <div class="image-sub-box">
        @foreach($cat->catImageSub() as $cat_sub)
        <div class="image-sub">
            <div class="image">
                <img src="{{ Storage::url($cat_sub->image_path) }}" class="cat-sub" alt="サブフォト">
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="pink-box">
    @if(is_null($cat->cat_like_id()))
    <div class="like-box js-like" data-cat-id="{{ $cat->id }}" data-like-id="null">
        <p class="pink">☆お気に入り登録</p>
    </div>
    @else
    <div class="like-box btn-reverse js-like" data-cat-id="{{ $cat->id }}" data-like-id="{{ $cat->cat_like_id() }}">
        <p class="pink">★お気に入り</p>
    </div>
    @endif


    @if($cat->gender === 0)
    <div class="name-box">
        <p>名前：<span class="name">{{ $cat->name }}くん</span></p>
        <p>譲渡エリア：<span>{{ $cat->area }}</span></p>
        <p>性別：<span>オス</span><span class="male-icon">♂</span></p>
        @if(isset($cat->age_about))
        <p>年齢：<span>推定{{ $cat->cat_age }}</span></p>
        @else
        <p>年齢：<span>{{ $cat->cat_age }}</span></p>
        @endif
        <p>種類：<span>{{ $cat->type }}</span></p>
    </div>
    @elseif($cat->gender === 1)
    <div class="name-box">
        <p>名前：<span class="name">{{ $cat->name }}ちゃん</span></p>
        <p>譲渡エリア：<span>{{ $cat->area }}</span></p>
        <p>性別：<span>メス</span><span class="scalpel-icon">♀</span></p>
        @if(isset($cat->age_about))
        <p>年齢：<span>推定{{ $cat->cat_age }}</span></p>
        @else
        <p>年齢：<span>{{ $cat->cat_age }}</span></p>
        @endif
        <p>種類：<span>{{ $cat->type }}</span></p>
    </div>
    @endif
</div>
<div class="profile-box">
    <div class="profile-text">
        <p class="main">●自己紹介</p>
        <p>{{ $cat->introduction }}</p>
        <!-- <a href="#">
            <div class="user-home">
                <p>保護団体のHPへ</p>
                <div class="black-cat">
                    <img src="{{ asset('/img/cat_black.png') }}" alt="黒猫アイコン">
                </div>
            </div>
        </a> -->
    </div>
</div>
<div class="green-box">
    <div class="arrow"></div>

    @if($user->admin_confirmation === 1 && $user->id === $cat->user_id)
    <div class="next-form">
        <a href="/admin/cat/edit/{{ $cat->id }}">編集</a>
    </div>
    @else
    <div class="next-form">
        <a href="/form/{{$cat->id}}">応募フォームへ</a>
    </div>
    @endif

</div>

@endsection

@include('question')
