@extends('home1')

@section('main')
<div class="register-box">
    <h3>保護猫新規登録</h3>
    <form action="/admin/cat/register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <p>写真</p>
            <div class="cat-image-box">
                <label for="image" class="form-label">メイン</label>
                <input type="file" class="form-control" name="cat_image_main" id="image" accept=".jpeg, .jpg, .png" required>
                <p>サブ</p>
                <div class="sub-image">
                    <input type="file" class="form-control" name="cat_image[]" accept=".jpeg, .jpg, .png">
                    <input type="file" class="form-control" name="cat_image[]" accept=".jpeg, .jpg, .png">
                    <input type="file" class="form-control" name="cat_image[]" accept=".jpeg, .jpg, .png">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="form-label">名前</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="「くん」「ちゃん」抜きで記入してください" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="type" class="form-label">種類</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="例）雑種" value="{{ old('type') }}" required>
        </div>
        
        <div class="form-group">
            <p>性別</p>
            <div class="gender">
                <div class="gender-box">
                    <label for="male" class="form-check-label">オス</label>
                    <input type="radio" class="form-check-input" name="gender" id="male" value="0">
                </div>
                <div class="gender-box">
                    <label for="scalpel" class="form-check-label">メス</label>
                    <input type="radio" class="form-check-input" name="gender" id="scalpel" value="1">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="age" class="form-label">年齢</label>
            <div class="custom-box">
                <select name="age" id="age" class="form-select" required>
                    <option value="" selected>選択してください</option>
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
            <div class="form-check">
                <label for="about" class="form-check-label">推定</label>
                <input type="checkbox" name="age_about" id="about">
            </div>
        </div>
        
        <div class="form-group">
            <label for="area" class="form-label">譲渡エリア</label>
            <div class="custom-box">
                <select name="area" id="area" class="form-select" required>
                    <option value="" selected>選択してください</option>
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

        <div class="form-group">
            <label for="slogan" class="form-label">キャッチコピー</label>
            <input type="text" class="form-control" name="slogan" id="slogan" placeholder="例）元気いっぱいの男の子！"  value="{{ old('slogan') }}" required>
        </div>
        
        <div class="form-group">
            <label for="introduction" class="form-label">自己紹介文</label>
            <textarea name="introduction" class="form-control" id="introduction" required>{{ old('introduction') }}</textarea>
        </div>
        <div class="button-box">
            <button type="submit" class="btn">新規登録</button>
        </div>
    </form>
</div>
@endsection