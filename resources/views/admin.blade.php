<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<title>管理画面</title>
</head>

<body>
@extends('head')
@section('child')
<main>
<h1> 里親募集応募者リスト </h1>
    <table border="1"class="table table-bordered" style="max-width: 80%;" >
        <tr class="title">
            <th >名前</th>
            <th>電話</th>
            <th>メール</th>
            <th >備考</th>
            <th>猫の名前</th>
            <th>猫の年齢</th>
            <th>猫の種類</th>
            <th>猫の住んでいる都道府県</th>
        </tr>
        @foreach($forms as $form)
        <tr>
            <td>{{$form->name}}</td>
            <td>{{$form->telephone}}</td>
            <td>{{$form->email}}</td>
            <td >{{$form->memo}}</td>
            <td>{{$form->cname}}</td>
            <td>{{$form->cage}}</td>
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
 @endsection
</main>
</body>

</html>
