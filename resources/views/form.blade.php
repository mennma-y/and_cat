<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<header>
    <h1>&Cat 応募フォーム</h1>
</header>


<body>
    <section>
        <form action="/send" method="POST">
        <p>〜名前〜</p>
        <input type="text" class="name"><br>
        <p>〜携帯電話〜</p>
        <input type="text" class="phone"><br>
        <p>〜備考〜</p>
        <textarea name="メモ" id="" cols="40" rows="10"></textarea>
        <input type="submit" value="応募を確定する" class="Confirm">
        </form>
    </section>
</body>










</html>