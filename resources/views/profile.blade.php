@extends('layouts.app')

@section('content')
<div class="container">
        
        <h2 style="text-align: center; margin-top:20px;">プロフィール</h2>

        <div style="margin-top: 30px;">
            <div class="image" style="width: 15%; margin:auto;"><img src="{{$user->img_url}}" alt="" 
            style="width: 100%; margin-bottom:20px; border:solid 1px darkgray; border-radius: 50%;"></div>
            
            <table class="table table-striped" style="width: 60%; margin:auto;">  
                <tr>
                <th style="background-color:#84D9D0;">ニックネーム</th>
                <td style="background-color: #fff; font-size:18px;">{{$user->name}}</td>
                </tr>  
                <tr>
                <th style="background-color: #FAE7F6;">メールアドレス</th>
                <td>{{$user->email}}</td>  
                </tr>    
                
                
                
            </table>
        
        </div>
        <div class="button" style="width: 80%;"><button type="button" class="btn" style="float: right; margin-top:20px; background-color: #84D9D0;border: solid 1px darkgray;color:#fff;" data-bs-toggle="modal" data-bs-target="#js-modal">プロフィールを編集</button></div>
        <div class="modal fade" id="js-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('user.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header" style="background-color: #84D9D0;">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:#fff;">プロフィールを編集</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="image" style="width: 15%; margin:auto;"><img src="{{$user->img_url}}" alt="" 
                            style="width: 100%; margin-bottom:20px; border:solid 1px darkgray; border-radius: 50%;"></div>
                            <div class="mb-3">
                                <label for="" class="mb-1">プロフィール写真</label>
                                <input type="file" class="form-control form-control-sm" name="image" accept="image/jpeg,image/png">
                            </div>
                            <input type="text" class="form-control mb-4" name="nickname" value="" placeholder="ニックネーム" max-length="50" required >
                            <input type="email" class="form-control mb-4" name="email" value="" placeholder="メールアドレス" max-length="254" required >
                            <input type="password" class="form-control mb-4" name="password" value="" placeholder="パスワードを変更する場合ご入力ください" min-length="4" max-length="128" >

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
                            <button type="submit" class="btn" style="background-color: #84D9D0; border: solid 1px darkgray; color:#fff;">保存</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection    