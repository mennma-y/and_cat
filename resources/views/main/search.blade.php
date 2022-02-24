<div class="search-top">
    <p class="search">絞り込み検索</p>
    <form action="#" method="get">
        <label for="area">譲渡エリア</label>
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
        <label for="gender">性別</label>
        <div class="gender" id="gender">
            <label for="male">オス</label>
            <input type="radio" name="gender" id="male" value="0">
            <label for="scalpel">メス</label>
            <input type="radio" name="gender" id="scalpel" value="1">
            <label for="age">年齢</label>
        </div>
        <label for="age">年齢</label>
        <select name="age" id="age">
            <option value="" selected>指定なし</option>
            <option value="0～3ヶ月">0～3ヶ月</option>
            <option value="4～7ヶ月">4～7ヶ月</option>
            <option value="8～11ヶ月">8～11ヶ月</option>
            <option value="1歳">1歳</option>
            <option value="2歳">2歳</option>
            <option value="3歳">3歳</option>
            <option value="4歳">4歳</option>
            <option value="5歳">5歳</option>
            <option value="6歳">6歳</option>
            <option value="7歳">7歳</option>
            <option value="8歳">8歳</option>
            <option value="9歳">9歳</option>
            <option value="10歳～">10歳～</option>
        </select>
        <label for="type">種類</label>
        <input type="text" name="type" id="type">
        <button type="submit">絞り込む</button>
    </form>
</div>
<div class="cats-box">
    <div class="new">
        <div class="square"></div>
        <p>新着の保護猫</p>
    </div>
    <div class="cat-box">
        <div class="cat-image">
            <img src="{{ asset('/img/post1.jpg') }}" class="cat-main" alt="メインフォト">
        </div>
        <div class="text">
            <p>雑種</p>
            <p>【関東】オス<span>♂</span>3歳</p>
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
        <div class="cat-image">
            <img src="{{ asset('/img/post2.jpg') }}" class="cat-main" alt="メインフォト">
        </div>
        <div class="text">
            <p>雑種</p>
            <p>【関東】メス<span>♀</span>2歳</p>
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
        <div class="cat-image">
            <img src="{{ asset('/img/post3.jpg') }}" class="cat-main" alt="メインフォト">
        </div>
        <div class="text">
            <p>雑種</p>
            <p>【関東】オス<span>♂</span>3歳</p>
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
        <div class="cat-image">
            <img src="{{ asset('/img/post4.jpg') }}" class="cat-main" alt="メインフォト">
        </div>
        <div class="text">
            <p>雑種</p>
            <p>【関東】オス<span>♂</span>3歳</p>
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