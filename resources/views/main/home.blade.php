<!--@extends('nishiyama')-->

@section('main')
<div class="new">
    <div class="square"></div>
    <p>新着の保護猫</p>
</div>
<div class="cats-box">
    <div class="cat-box">
        <a href="">
            <div class="cat-image">
                <img src="{{ asset('/img/post1.jpg') }}" class="cat-main" alt="メインフォト">
            </div>
        </a>
        <div class="text">
            <p>雑種</p>
            <p>【関東】 オス<span>♂</span>  3歳</p>
            <div class="green-box">
                <p class="name">太郎くん</p>
                <p>遊ぶのが大好き！</p>
            </div>
            <div class="like-box">
                <p>☆お気に入り登録</p>
            </div>
        </div>
    </div>
    <div class="cat-box">
        <a href="">
            <div class="cat-image">
                <img src="{{ asset('/img/post2.jpg') }}" class="cat-main" alt="メインフォト">
            </div>
        </a>
        <div class="text">
            <p>雑種</p>
            <p>【関東】 メス<span>♀</span>  2歳</p>
            <div class="green-box">
                <p class="name">みかんちゃん</p>
                <p>人懐っこい猫ちゃん</p>
            </div>
            <div class="like-box">
                <p>☆お気に入り登録</p>
            </div>
        </div>
    </div>
    <div class="cat-box">
        <a href="">
            <div class="cat-image">
                <img src="{{ asset('/img/post3.jpg') }}" class="cat-main" alt="メインフォト">
            </div>
        </a>
        <div class="text">
            <p>雑種</p>
            <p>【関東】 オス<span>♂</span>  3歳</p>
            <div class="green-box">
                <p class="name">太郎くん</p>
                <p>遊ぶのが大好き！</p>
            </div>
            <div class="like-box">
                <p>☆お気に入り登録</p>
            </div>
        </div>
    </div>
    <div class="cat-box">
        <a href="">
            <div class="cat-image">
                <img src="{{ asset('/img/post4.jpg') }}" class="cat-main" alt="メインフォト">
            </div>
        </a>
        <div class="text">
            <p>雑種</p>
            <p>【関東】 オス<span>♂</span>  3歳</p>
            <div class="green-box">
                <p class="name">太郎くん</p>
                <p>遊ぶのが大好き！</p>
            </div>
            <div class="like-box">
                <p>☆お気に入り登録</p>
            </div>
        </div>
    </div>
</div>
@endsection
