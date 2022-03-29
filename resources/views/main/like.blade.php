@extends('head')
@section('title','お気に入り')

@section('main')
<div class="container" style="width: 900px; flex-direction:column; ">
<div class="like-top">
    <h2>お気に入り</h2>
    <p class="page">すべて<span>（{{ $like_count }}件）</span></p>
</div>
@if($cats->isEmpty())
    <p class="p-3">お気に入りがありません。</p>
@else
<div class="likes-box">
    @foreach($cats as $cat)
    <div class="like-box">
        <div class="cat-image">
            <img src="{{ Storage::url($cat->catImageMain()->image_path) }}" class="cat-main" alt="メインフォト">
        </div>
        @if($cat->gender === 0)
        <div class="cat-text">
            <p>{{ $cat->type }}</p>
            @if(isset($cat->age_about))
            <p>【{{ $cat->area }}】  オス<span class="male-icon">♂</span>推定{{ $cat->age }}</p>
            @else
            <p>【{{ $cat->area }}】  オス<span class="male-icon">♂</span>{{ $cat->age }}</p>
            @endif
            <p class="cat-name">{{ $cat->name }}くん</p>
            <p>{{ $cat->slogan }}</p>
        </div>
        @elseif($cat->gender === 1)
        <div class="cat-text">
            <p>{{ $cat->type }}</p>
            @if(isset($cat->age_about))
            <p>【{{ $cat->area }}】  メス<span class="scalpel-icon">♀</span>推定{{ $cat->age }}</p>
            @else
            <p>【{{ $cat->area }}】  メス<span class="scalpel-icon">♀</span>{{ $cat->age }}</p>
            @endif
            <p class="cat-name">{{ $cat->name }}ちゃん</p>
            <p>{{ $cat->slogan }}</p>
        </div>
        @endif
        <div class="button-box">
            <a href="/cat/profile/{{ $cat->id }}">
                <div class="arrow">
                    <p>もっと見る</p>
                </div>
            </a>
            <button class="btn btn-success js-like" data-cat-id="{{ $cat->id }}" data-like-id="{{ $cat->cat_like_id() }}">キャンセル</button>
        </div>
    </div>
    @endforeach
</div>
</div>
@endif
@endsection

