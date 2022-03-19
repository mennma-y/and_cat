<!--<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/question.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>-->


@section('ques')

<div class="question-box">

    <h2 class="question-title">質問はこちらから</h2>
    @if ($errors->any())
    <div class="alertdanger">
        <ul class="form-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/question_send" method="post">
        @csrf
        <textarea name="question" id="" cols="50" rows="4" class="question"></textarea>
        <input type="hidden" name="id" value="{{$cat->id}}">
        <div class="submit-question">
            <input type="submit" value="質問する" class="question-submit">
        </div>

    </form>
    @foreach($questions as $question)
    <div class="card">
        <div class="board">
            @if(Auth::id()==$question->user_id)
            <form action="/reply" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$question->id}}">
                <input type="hidden" name="reid" value="{{$cat->id}}">
                <div class="input-reply">
                    <input type="text" name="reply">
                </div>
                <div class="submit">
                    <input type="submit" value="返信">
                </div>
            </form>
            <form action="/delete" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$question->id}}">
                <input type="hidden" name="reid" value="{{$cat->id}}">
                <div class="delete">
                    <input type="submit" value="質問を削除">
                </div>
            </form>
            @endif
            <p><span class="question-user">「{{$question -> name}}」</span>さんからの質問です</p>
            <p>「{{$question -> question}}」</p>
        </div>
    </div>
    <div class="replyhome">
        <div class="card">
            <div class="reply-board">
                <p>{{$question -> reply}}</p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="paginate">
        {{ $questions->links() }}
    </div>
</div>

@endsection