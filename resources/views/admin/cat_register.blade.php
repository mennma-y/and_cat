<div class="register-box">
    <h3>保護猫新規登録</h3>
    <form action="#" method="post">
        @csrf
        <p>写真</p>
        <div class="image-box">
            <label for="image1">メイン</label>
            <input type="file" class="form-control" name="cat_image[]" id="image1" enctype="multipart/form-data" accept=".jpeg, .jpg, .png">
            <p>サブ</p>
            <div class="sub-image">
                <input type="file" class="form-control" name="cat_image[]" id="image2" enctype="multipart/form-data" accept=".jpeg, .jpg, .png">
                <input type="file" class="form-control" name="cat_image[]" id="image3" enctype="multipart/form-data" accept=".jpeg, .jpg, .png">
                <input type="file" class="form-control" name="cat_image[]" id="image4" enctype="multipart/form-data" accept=".jpeg, .jpg, .png">
            </div>
        </div>

        <label for="type">種類</label>
        <input type="text" class="form-control" name="type" id="type">
        
        <p>性別</p>
        <div class="gender" id="gender">
            <label for="male">オス</label>
            <input type="radio" class="form-control" name="gender" id="male" value="0">
            <label for="scalpel">メス</label>
            <input type="radio" class="form-control" name="gender" id="scalpel" value="1">
            <label for="age">年齢</label>
        </div>
        
        <label for="age">年齢</label>
        <input type="text" class="form-control" name="age" id="age">
        
        <p>譲渡エリア</p>
        <select name="area" id="area">
            <option value="" selected>指定なし</option>
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

        <label for="slogan">キャッチコピー</label>
        <input type="text" class="form-control" name="slogan" id="slogan">
        
        <label for="introduction">自己紹介文</label>
        <textarea name="introduction" class="form-control" id="introduction"></textarea>
    </form>
</div>