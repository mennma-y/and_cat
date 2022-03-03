<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>

<body><div class="form">
<img src="{{ asset('img/moji_logo.png') }}" alt="" style="width:10%;" >
</div>
    <h1>保護猫応募者リスト</h1>

    <table >

        <tr>
            <th>名前</th>
            <th>電話</th>
            <th>メール</th>
            <th>備考</th>
        </tr>
        @foreach($forms as $form)
        <td>{{$form->name}}</td>
        <td>{{$form->telephone}}</td>
        <td>{{$form->user->email}}</td>
        <td>{{$form->memo}}</td>
        @endforeach
    </table>
</div>

</body>

</html>