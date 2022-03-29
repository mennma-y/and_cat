<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>応募フォーム</title>
    <link rel="icon" href="/favicon2.ico">
</head>
<header>

    @extends('head')
    
@section('form')
    @if ($errors->any())

        <ul class="form-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</header>

<body>

    <section>

        <form method="post" action="/send">
            @csrf
            <p>〜名前〜</p>
            <input type="text" name="name" value="{{ old('name') }}"><br>
            <p>〜携帯電話〜</p>
            <input type="text" name="telephone" value="{{ old('telephone')}}"><br>
            <p>〜備考〜</p>
            <textarea name="memo" id="" cols="40" rows="10" class="memo" >{{ old('memo')}}</textarea>
            <input type="hidden" name="forid" value="{{old('forid',$id)}}">
            <input type="hidden" name="id" value="{{$cat->id}}">
            <div class="submit">
                <input type="submit" value="応募を確定する" class="confilm">
            </div>

        </form>
    </section>
    @endsection
</body>










</html>
