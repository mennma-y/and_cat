<!-- <html>

<head>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>応募フォーム</title>
    <link rel="icon" href="/favicon2.ico">
</head>
 -->

@extends('head')
@section('title','保護猫応募フォーム')

@section('form')
<header>
    @if ($errors->any())

        <ul class="form-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</header>
{{--
<body> --}}
<div class="satooya-container">
    <div class="satooya-sub-container">
        <h3>里親応募フォーム</h3>
    <section>

        <form method="post" action="/send" style="margin-bottom: 5%">
            @csrf
            <p>名前</p>
            <input type="text" name="name" value="{{ old('name') }}"><br>
            <p>携帯電話</p>
            <input type="text" name="telephone" value="{{ old('telephone')}}"><br>
            <p>備考</p>
            <textarea name="memo" id="" cols="40" rows="10" class="memo" >{{ old('memo')}}</textarea>
            <input type="hidden" name="forid" value="{{old('forid',$id)}}">
            <input type="hidden" name="id" value="{{$cat->id}}">
            <div class="submit">
                <h4><input type="submit" value="応募を確定する" class="confilm"></h4>
            </div>

        </form>
    </section>
</div>
</div>
    @endsection
{{-- </body> --}}

{{--
</html> --}}
