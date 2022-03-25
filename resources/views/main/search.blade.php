@extends('head')

@section('main')
<div class="container" style="width: 900px; flex-direction:column; ">
<div class="search-top">
    <h3>絞り込み検索</h3>
    <div class="forms-box">
        <form action="/search" method="get">
            @csrf
            <div class="form-group form-box">
                <label for="area" class="form-label custom-label">譲渡エリア</label>
                <div class="custom-box">
                    <select name="area" id="area" class="form-select">
                        @if(isset($area))
                        <option value="{{ $area }}" selected>{{ $area }}</option>
                        <option value="">指定なし</option>
                        @else
                        <option value="" selected>指定なし</option>
                        @endif
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都">東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-box">
                <span class="custom-label">性別</span>
                @if(isset($gender))
                <div class="gender custom-box radio-box">
                    <div>
                        <label for="none" class="form-check-label">指定なし</label>
                        <input type="radio" name="gender" id="none" class="form-check-input" value="">
                    </div>
                    <div class="male-box">
                        <label for="male" class="form-check-label">オス</label>
                        @if($gender == 0)
                        <input type="radio"  name="gender" id="male" class="form-check-input" value="0" checked>
                        @else
                        <input type="radio"  name="gender" id="male" class="form-check-input" value="0">
                        @endif
                    </div>
                    <div class="scalpel-box">
                        <label for="scalpel" class="form-check-label">メス</label>
                        @if($gender == 1)
                        <input type="radio" name="gender" id="scalpel" class="form-check-input" value="1" checked>
                        @else
                        <input type="radio" name="gender" id="scalpel" class="form-check-input" value="1">
                        @endif
                    </div>
                </div>
                @else
                <div class="gender custom-box radio-box">
                    <div>
                        <label for="none" class="form-check-label">指定なし</label>
                        <input type="radio" name="gender" id="none" class="form-check-input" value="" checked>
                    </div>
                    <div class="male-box">
                        <label for="male" class="form-check-label">オス</label>
                        <input type="radio"  name="gender" id="male" class="form-check-input" value="0">
                    </div>
                    <div class="scalpel-box">
                        <label for="scalpel" class="form-check-label">メス</label>
                        <input type="radio" name="gender" id="scalpel" class="form-check-input" value="1">
                    </div>
                </div>
                @endif
            </div>
            <div class="form-group form-box">
                <label for="age" class="form-label custom-label">年齢</label>
                <div class="custom-box">
                    <select name="age_more" id="age" class="form-select">
                        @if(isset($age_more))
                        @switch($age_more)
                            @case(1)
                                <option value="1" selected>0ヶ月</option>
                                @break
                            @case(2)
                                <option value="2" selected>1ヶ月</option>
                                @break
                            @case(3)
                                <option value="3" selected>2ヶ月</option>
                                @break
                            @case(4)
                                <option value="4" selected>3ヶ月</option>
                                @break
                            @case(5)
                                <option value="5" selected>4ヶ月</option>
                                @break
                            @case(6)
                                <option value="6" selected>5ヶ月</option>
                                @break
                            @case(7)
                                <option value="7" selected>6ヶ月</option>
                                @break
                            @case(8)
                                <option value="8" selected>7ヶ月</option>
                                @break
                            @case(9)
                                <option value="9" selected>8ヶ月</option>
                                @break
                            @case(10)
                                <option value="10" selected>9ヶ月</option>
                                @break
                            @case(11)
                                <option value="11" selected>10ヶ月</option>
                                @break
                            @case(12)
                                <option value="12" selected>11ヶ月</option>
                                @break
                            @case(13)
                                <option value="13" selected>1歳</option>
                                @break
                            @case(14)
                                <option value="14" selected>2歳</option>
                                @break
                            @case(15)
                                <option value="15" selected>3歳</option>
                                @break
                            @case(16)
                                <option value="16" selected>4歳</option>
                                @break
                            @case(17)
                                <option value="17" selected>5歳</option>
                                @break
                            @case(18)
                                <option value="18" selected>6歳</option>
                                @break
                            @case(19)
                                <option value="19" selected>7歳</option>
                                @break
                            @case(20)
                                <option value="20" selected>8歳</option>
                                @break
                            @case(21)
                                <option value="21" selected>9歳</option>
                                @break
                            @case(22)
                                <option value="22" selected>10歳</option>
                                @break
                            @case(23)
                                <option value="23" selected>11歳</option>
                                @break
                            @case(24)
                                <option value="24" selected>12歳</option>
                                @break
                            @case(25)
                                <option value="25" selected>13歳</option>
                                @break
                            @case(26)
                                <option value="26" selected>14歳</option>
                                @break
                            @case(27)
                                <option value="27" selected>15歳</option>
                                @break
                            @case(28)
                                <option value="28" selected>16歳</option>
                                @break
                            @case(29)
                                <option value="29" selected>17歳</option>
                                @break
                            @case(30)
                                <option value="30" selected>18歳</option>
                                @break
                            @case(31)
                                <option value="31" selected>19歳</option>
                                @break
                            @case(32)
                                <option value="32" selected>20歳</option>
                                @break
                        @endswitch
                        <option value="">指定なし</option>
                        @else
                        <option value="" selected>指定なし</option>
                        @endif
                        <option value="1">0ヶ月</option>
                        <option value="2">1ヶ月</option>
                        <option value="3">2ヶ月</option>
                        <option value="4">3ヶ月</option>
                        <option value="5">4ヶ月</option>
                        <option value="6">5ヶ月</option>
                        <option value="7">6ヶ月</option>
                        <option value="8">7ヶ月</option>
                        <option value="9">8ヶ月</option>
                        <option value="10">9ヶ月</option>
                        <option value="11">10ヶ月</option>
                        <option value="12">11ヶ月</option>
                        <option value="13">1歳</option>
                        <option value="14">2歳</option>
                        <option value="15">3歳</option>
                        <option value="16">4歳</option>
                        <option value="17">5歳</option>
                        <option value="18">6歳</option>
                        <option value="19">7歳</option>
                        <option value="20">8歳</option>
                        <option value="21">9歳</option>
                        <option value="22">10歳</option>
                        <option value="23">11歳</option>
                        <option value="24">12歳</option>
                        <option value="25">13歳</option>
                        <option value="26">14歳</option>
                        <option value="27">15歳</option>
                        <option value="28">16歳</option>
                        <option value="29">17歳</option>
                        <option value="30">18歳</option>
                        <option value="31">19歳</option>
                        <option value="32">20歳</option>
                    </select>
                </div>
            </div>
            <div>～</div>
            <div class="form-group form-box">
                <label for="" class="form-label custom-label"></label>
                <div class="custom-box">
                    <select name="age_less" class="form-select">
                        @if(isset($age_less))
                        @switch($age_less)
                            @case(1)
                                <option value="1" selected>0ヶ月</option>
                                @break
                            @case(2)
                                <option value="2" selected>1ヶ月</option>
                                @break
                            @case(3)
                                <option value="3" selected>2ヶ月</option>
                                @break
                            @case(4)
                                <option value="4" selected>3ヶ月</option>
                                @break
                            @case(5)
                                <option value="5" selected>4ヶ月</option>
                                @break
                            @case(6)
                                <option value="6" selected>5ヶ月</option>
                                @break
                            @case(7)
                                <option value="7" selected>6ヶ月</option>
                                @break
                            @case(8)
                                <option value="8" selected>7ヶ月</option>
                                @break
                            @case(9)
                                <option value="9" selected>8ヶ月</option>
                                @break
                            @case(10)
                                <option value="10" selected>9ヶ月</option>
                                @break
                            @case(11)
                                <option value="11" selected>10ヶ月</option>
                                @break
                            @case(12)
                                <option value="12" selected>11ヶ月</option>
                                @break
                            @case(13)
                                <option value="13" selected>1歳</option>
                                @break
                            @case(14)
                                <option value="14" selected>2歳</option>
                                @break
                            @case(15)
                                <option value="15" selected>3歳</option>
                                @break
                            @case(16)
                                <option value="16" selected>4歳</option>
                                @break
                            @case(17)
                                <option value="17" selected>5歳</option>
                                @break
                            @case(18)
                                <option value="18" selected>6歳</option>
                                @break
                            @case(19)
                                <option value="19" selected>7歳</option>
                                @break
                            @case(20)
                                <option value="20" selected>8歳</option>
                                @break
                            @case(21)
                                <option value="21" selected>9歳</option>
                                @break
                            @case(22)
                                <option value="22" selected>10歳</option>
                                @break
                            @case(23)
                                <option value="23" selected>11歳</option>
                                @break
                            @case(24)
                                <option value="24" selected>12歳</option>
                                @break
                            @case(25)
                                <option value="25" selected>13歳</option>
                                @break
                            @case(26)
                                <option value="26" selected>14歳</option>
                                @break
                            @case(27)
                                <option value="27" selected>15歳</option>
                                @break
                            @case(28)
                                <option value="28" selected>16歳</option>
                                @break
                            @case(29)
                                <option value="29" selected>17歳</option>
                                @break
                            @case(30)
                                <option value="30" selected>18歳</option>
                                @break
                            @case(31)
                                <option value="31" selected>19歳</option>
                                @break
                            @case(32)
                                <option value="32" selected>20歳</option>
                                @break
                        @endswitch
                        <option value="">指定なし</option>
                        @else
                        <option value="" selected>指定なし</option>
                        @endif
                        <option value="1">0ヶ月</option>
                        <option value="2">1ヶ月</option>
                        <option value="3">2ヶ月</option>
                        <option value="4">3ヶ月</option>
                        <option value="5">4ヶ月</option>
                        <option value="6">5ヶ月</option>
                        <option value="7">6ヶ月</option>
                        <option value="8">7ヶ月</option>
                        <option value="9">8ヶ月</option>
                        <option value="10">9ヶ月</option>
                        <option value="11">10ヶ月</option>
                        <option value="12">11ヶ月</option>
                        <option value="13">1歳</option>
                        <option value="14">2歳</option>
                        <option value="15">3歳</option>
                        <option value="16">4歳</option>
                        <option value="17">5歳</option>
                        <option value="18">6歳</option>
                        <option value="19">7歳</option>
                        <option value="20">8歳</option>
                        <option value="21">9歳</option>
                        <option value="22">10歳</option>
                        <option value="23">11歳</option>
                        <option value="24">12歳</option>
                        <option value="25">13歳</option>
                        <option value="26">14歳</option>
                        <option value="27">15歳</option>
                        <option value="28">16歳</option>
                        <option value="29">17歳</option>
                        <option value="30">18歳</option>
                        <option value="31">19歳</option>
                        <option value="32">20歳</option>
                    </select>
                </div>
            </div>
            <div class="form-group form-box">
                <label for="type" class="form-label custom-label">種類</label>
                <div class="custom-box">
                    @if(isset($type))
                    <input type="text" name="type" id="type" class="form-control" value="{{ $type }}">
                    @else
                    <input type="text" name="type" id="type" class="form-control">
                    @endif
                </div>
                </div>
            <button class="btn" type="submit">絞り込む</button>
        </form>
    </div>
</div>
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
            <p>【{{ $cat->area }}】 オス<span class="male-icon">♂</span>  推定{{ $cat->cat_age }}</p>
            @else
            <p>【{{ $cat->area }}】 オス<span class="male-icon">♂</span>  {{ $cat->cat_age }}</p>
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
            <p>【{{ $cat->area }}】 メス<span class="scalpel-icon">♀</span>  推定{{ $cat->cat_age }}</p>
            @else
            <p>【{{ $cat->area }}】 メス<span class="scalpel-icon">♀</span>  {{ $cat->cat_age }}</p>
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
</div>
@endsection
