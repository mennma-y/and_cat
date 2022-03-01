@extends('nishiyama')

@section('main')
<div class="like-top">
    <h2>お気に入り</h2>
    <p class="page">すべて  <span>1～2件（2件）</span></p>
</div>
<div class="likes-box">
    <div class="like-box">
        <div class="cat-image">
            <img src="{{ asset('/img/post1.jpg') }}" class="cat-main" alt="メインフォト">
        </div>
        <div class="cat-text">
            <p>雑種</p>
            <p>【関東】  オス<span>♂</span>3歳</p>
            <p class="cat-name">太郎くん</p>
            <p>遊ぶのが大好き！</p>
        </div>
        <div class="button-box">
            <a href="">
                <div class="arrow">
                    <p>もっと見る</p>
                </div>
            </a>
            <button class="btn btn-success">キャンセル</button>
        </div>
    </div>
    <div class="like-box">
        <div class="cat-image">
            <img src="{{ asset('/img/post2.jpg') }}" class="cat-main" alt="メインフォト">
        </div>
        <div class="cat-text">
            <p>雑種</p>
            <p>【関東】  メス<span>♀</span>2歳</p>
            <p class="cat-name">みかんちゃん</p>
            <p>人懐っこい猫ちゃん</p>
        </div>
        <div class="button-box">
            <a href="">
                <div class="arrow">
                    <p>もっと見る</p>
                </div>
            </a>
            <button class="btn btn-success">キャンセル</button>
        </div>
    </div>
</div>
@endsection

