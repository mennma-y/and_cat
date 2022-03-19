@extends('home1')

@section('home')
<div class="new">
    <div class="square"></div>
    <p>新着の保護猫</p>
</div>
<div class="cats-box">
    @foreach($cats as $cat)
    <div class="cat-box">
        <a href="/cat/profile/{{ $cat->id }}">
            <div class="cat-image">
                <img src="{{ Storage::url($cat->catImageMain()->image_path) }}" class="cat-main" alt="メインフォト">
            </div>
        </a>
        @if($cat->gender === 0)
        <div class="text">
            <p>{{ $cat->type }}</p>
            @if(isset($cat->age_about))
            <p>【{{ $cat->area }}】 オス<span class="male-icon">♂</span>  推定{{ $cat->age }}</p>
            @else
            <p>【{{ $cat->area }}】 オス<span class="male-icon">♂</span>  {{ $cat->age }}</p>
            @endif

            <div class="green-box">
                <p class="name">{{ $cat->name }}くん</p>
                <p>{{ $cat->slogan }}</p>
            </div>

            @if(is_null($cat->cat_like_id()))
            <div class="like-box js-like" data-cat-id="{{ $cat->id }}" data-like-id="null">
                <p class="like">☆お気に入り登録</p>
            </div>
            @else
            <div class="like-box btn-reverse js-like" data-cat-id="{{ $cat->id }}" data-like-id="{{ $cat->cat_like_id() }}">
                <p class="like">★お気に入り</p>
            </div>
            @endif

        </div>
        @elseif($cat->gender === 1)
        <div class="text">
            <p>{{ $cat->type }}</p>
            @if(isset($cat->age_about))
            <p>【{{ $cat->area }}】 メス<span class="scalpel-icon">♀</span>  推定{{ $cat->age }}</p>
            @else
            <p>【{{ $cat->area }}】 メス<span class="scalpel-icon">♀</span>  {{ $cat->age }}</p>
            @endif

            <div class="green-box">
                <p class="name">{{ $cat->name }}ちゃん</p>
                <p>{{ $cat->slogan }}</p>
            </div>

            @if(is_null($cat->cat_like_id()))
            <div class="like-box js-like" data-cat-id="{{ $cat->id }}" data-like-id="null">
                <p class="like">☆お気に入り登録</p>
            </div>
            @else
            <div class="like-box btn-reverse js-like" data-cat-id="{{ $cat->id }}" data-like-id="{{ $cat->cat_like_id() }}">
                <p class="like">★お気に入り</p>
            </div>
            @endif

        </div>
        @endif
    </div>
    @endforeach
</div>
@endsection
