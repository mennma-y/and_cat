<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>こちらの猫について質問がある方は下にどうぞ!!</h1>
    @if ($errors->any())
    <div class="alert-danger">
        <ul class="form-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/send_question" method="post">
        @csrf
        <input type="text" name="question" class="question">
        <button type="submit" class="send">送信</button>
    </form>
    @foreach($questions as $question)
    {{$question -> $question}}
@endforeach
</body>