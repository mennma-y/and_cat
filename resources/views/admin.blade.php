{{-- <html>

<head> --}}

{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}"> --}}
{{-- <title>管理画面</title> --}}
{{-- </head>

<body> --}}
@extends('head')

@section('title','里親募集応募者リスト')
@section('child')
{{-- <main> --}}
<div class="main-container">
    <div class="sub-container">
    <h1> 里親募集応募者リスト </h1>
    </div>
    <table border="1" class="table table-bordered"  style="max-width: 98%;">
        <tr class="title">
            <th >名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th width="300" >備考</th>
            <th>猫の名前</th>
            <th>猫の年齢</th>
            <th>猫の種類</th>
            <th>猫の住んでいる都道府県</th>
        </tr>
        @foreach($forms as $form)
        <tr >
            <td>{{$form->name}}</td>
            <td>{{$form->telephone}}</td>
            <td>{{$form->email}}</td>
            <td class= "memo">{{$form->memo}}</td>
            <td>{{$form->cname}}</td>
            <td class="age">{{$form->cat_age}}</td>
            <td>{{$form->ctype}}</td>
            <td>{{$form->carea}}</td>
        </tr>
        @endforeach

    </table>

    <div class="mt-1 mb-1  row justify-content-center">
        <div class="links">
            {{ $forms->links() }}
        </div>
    </div>
</div>
@endsection
{{-- </main> --}}
{{-- </body>

</html> --}}
