@section('ques')

<div class="container">
<div class="question-box">

    {{-- <h2 class="question-title">質問はこちらから</h2> --}}
    <div class="question-title" >
        <h3>質問はこちらから<img src="/img/nikukyu.png"></h3>
        {{-- <h2>質問はこちらから</h2> --}}
        <p>チャットで質問ができます</p>
    </div>
    @if ($errors->any())
    <div class="alertdanger">
        <ul class="form-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/question_send" method="post" id="queform">

        @csrf
        <textarea name="question" id="" cols="50" rows="4" class="question" >{{ old('question')}}</textarea>
        <input type="hidden" name="id" value="{{$cat->id}}">
        <div class="submit-question">
            <input type="submit" value="質問する" class="question-submit" id="qubtn">
        </div>

    </form>

    @foreach($questions as $question)
    <div class="card">
        <div class="board">
            @if(Auth::id()==$question->user_id && $question->reply==null)
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
            @endif

            <p><span class="question-user">「{{$question -> name}}」</span>さんからの質問です</p>
            <p class="questio-title">「{{$question -> question}}」</p>

            @if(Auth::id()==$question->user_id)
            <form action="/delete" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$question->id}}">
                <input type="hidden" name="reid" value="{{$cat->id}}">
                <div class="delete">
                    <input type="submit" value="質問を削除">
                </div>
            </form>
            @endif
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
        {{ $questions->onEachSide(3)->links() }}
    </div>
</div>
</div>
<script>


    document.getElementById('qubtn').addEventListener('click', () => {

        document.getElementById('qubtn').disabled=true;
        document.getElementById('queform').submit();
    });
</script>
@endsection
