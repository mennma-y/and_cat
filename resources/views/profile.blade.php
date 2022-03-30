@extends('layouts.app')

@section('content')

<div class="container" style="width: 900px; height:900px" >
    <div class="row justify-content-center" style="height: 800px;">
        <div class="col-md-8" >
            <div class="card" style=" height: 460px;
                                    background-color: white;
                                    border-bottom-left-radius: 20px 20px;
                                    border-bottom-right-radius: 20px 20px;
                                    border-top-left-radius: 20px 20px;
                                    border-top-right-radius: 20px 20px;
                                    margin-top: 40px;">
                <div class="card-header" style="height:45px; background-color: #84D9D0; margin-top:30px; margin-bottom:10px">
                <h5 style="font-size:24px; margin: auto; text-align:center; color:#fff; font-weight:bold">保護猫と飼い主をつなぐ</h5>
                </div>

                <h3 style="text-align: center; margin-top:10px; margin-bottom:0px; font-weight:bold;">プロフィール</h3>
                <div class="box" style="text-align: center" >
                    <figure><img src="{{ Auth::user()->img_url }}" style="width: 80px;
                        height:80px;
                        margin-top: 10px;
                        border-radius: 50%;
                        border:darkgray;
                        background-color: rgba();" >
                        <figcaption>
                            <a class="name" style=" font-size:16px; margin: 0 1rem;">{{ Auth::user()->name }}</a>さん
                        </figcaption>
                    </figure>

{{-- {{ Auth::user()->img_url }} --}}

                        <table class="table " style=" border:solid 1px rgb(216, 216, 216); width: 70%; margin:auto;">
                            <tr>
                            <th style="background-color: rgb(237, 253, 94);">ニックネーム</th>
                            <td style="background-color: #fff; font-size:18px;">{{$user->name}}</td>
                            </tr>
                            <tr>
                            <th style="background-color: rgb(237, 253, 94);">メールアドレス</th>
                            <td style="background-color: #fff;font-size:18px; ">{{$user->email}}</td>
                            </tr>
                        </table>
                        {{-- background-color: #fff;
                        background-color:#84D9D0;
                        background-color: #FAE7F6; --}}
                        {{-- table-striped --}}


                            <div class="button" style="width: 80%;"><button type="button" class="btn" style="float: right; margin-top:20px; background-color: #84D9D0;border: solid 1px darkgray;color:#fff; margin-bottom:20px;" data-bs-toggle="modal" data-bs-target="#js-modal">プロフィールを編集</button></div>
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
                                                <input type="text" class="form-control mb-4" name="nickname" value="" placeholder="ニックネーム（5文字以内で入力してください）" max-length="50" required >
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

            </div>
        </div>
    </div>
</div>

@endsection
