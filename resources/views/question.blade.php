<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>こちらの猫について質問がある方は下にどうぞ!!</h1>

    <form action="/send_question" method="post">
        @csrf
        <input type="text" name="question" class="question">
        <button type="submit" class="send">送信</button>
    </form>
 
</body>