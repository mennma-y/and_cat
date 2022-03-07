<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<header>
    <h1> <img src="{{ asset('img/moji_logo.png') }}" alt="" style="width:10%;"></h1>


    @if ($errors->any())
    <div class="alert-danger">
        <ul class="form-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</header>

<body>
    <section>
        <form method="POST" action="/send">
            @csrf
            <p>〜名前〜</p>
            <input type="text" name="name" value="{{ old('name') }}"><br>
            <p>〜携帯電話〜</p>
            <input type="text" name="telephone" value="{{ old('telephone')}}"><br>
            <p>〜備考〜</p>
            <textarea name="memo" id="" cols="40" rows="10" class="memo" value="{{ old('memo')}}"></textarea>
            <input type="submit" value="応募を確定する" class="confilm">
        </form>
    </section>
</body>










</html>