<table class="table" style="margin-top:50px;">
            <thead>
                <tr>
                <th scope="col">日時</th>
                <th scope="col">場所</th>
                <th scope="col">内容</th>
                <th scope="col">団体名</th>
                <th score="col">  → イベントの詳細</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                    <td>{{$event->event_date}}</td>
                    <td>{{$event->place}}</td>
                    <td>{{$event->category}}</td>
                    <td>{{$event->organize}}</td>  
                    <td><a href="{{action('EventController@show',$event->id)}}" type="button" class="btn" style="border-radius: 50px;background-color: #FAE7F6;font-weight:bold;">詳細ページ</a></td> 
                    @if(isset($user->admin_confirmation) && $user->admin_confirmation === 1)
                        <td><a href="{{route('event.edit',['id'=>$event->id])}}" class="btn btn-primary">編集</a></td>  
                    @endif
                    </tr>
                    
                        
                    
                    
                @endforeach
                
            </tbody>
</table>