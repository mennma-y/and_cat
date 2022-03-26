@extends('layouts.app')

@section('content')
<div class="container" style="width: 900px; heigt:900px" >
    <div class="row justify-content-center" style="height: 800px;">
        <div class="col-md-8">
            <div class="card" style=" height: 680px;
                                    background-color: white;
                                    border-bottom-left-radius: 20px 20px;
                                    border-bottom-right-radius: 20px 20px;
                                    border-top-left-radius: 20px 20px;
                                    border-top-right-radius: 20px 20px;
                                    margin-top: 22px;">
                <div class="card-header" style="height:45px; background-color: #84D9D0; margin-top:30px; margin-bottom:10px">
                    <h5 style="font-size:24px; margin: auto; text-align:center; color:#fff; font-weight:bold">保護猫と飼い主をつなぐ</h5>
                </div>
                <div class="logo-image" style="width: 15%; margin:5px auto">
                    <img src="images/register_logo.png" alt="" style="width: 100%;">
                </div>
                <h3 style="text-align: center; margin-top:10px; margin-bottom:0px; font-weight:bold;">会員登録</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row" style="width:700px; margin-bottom: 10px; justify-content:center;">
                            {{-- <label for="img_url" class="col-md-4 col-form-label text-md-right" >画像</label> --}}
                            <label for="img_url" style="text-align:center;padding-left:0;padding-right:0;">画像
                            <input type="file" name="image" accept="image/jpeg,image/png"
                                class="col-md-5 col-form-label text-md-end" value="null" style="padding-left: 1px"></label>
                        </div>

                        <div class="form-group row" style="margin-bottom: 10px; justify-content: center;">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right"></label> --}}

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" style="border-radius: 10px; margin-bottom: auto" required autocomplete="name" autofocus placeholder="ニックネーム">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom: 10px ; justify-content: center;" >
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right"></label> --}}

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" style="border-radius: 10px;" required autocomplete="email" placeholder="メールアドレス">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom: 10px; justify-content: center;">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" style="border-radius: 10px;" placeholder="パスワード">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom: 10px; justify-content: center;">

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" style="border-radius: 10px;" required autocomplete="new-password" placeholder="パスワード確認">
                            </div>
                        </div>

                        <div class="form-group row" style="margin-top:15px; margin-bottom:0; justify-content: center; vertical-align:middle">
                            <div class="col-md-6" style="display:flex;">
                                <input type="checkbox" name="admin_confirmation" value="admin_confirmation" style="transform:scale(2.0);height: 10px;margin-top:8%">
                                <label for="admin-confirmation" class="" style="font-size:14px; margin-left:10px; padding-right:0; padding-top:12px ;" >保護猫団体の方はこちらをチェックしてください
                                </label>

                                <!--<input type="radio" style=" height: 10px; margin-left:10px; margin-right:10px; transform:scale(2.0);" id="admin-comfirmation" name="admin_confirmation" value="admin_confirmation">
                                <label for="admin-confirmation" class="" style="font-size:16px; padding-right:0; padding-top:12px ;" >保護猫団体の方はこちら</label>-->
                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" style="margin-top: 12px">
                                <button type="submit" class="btn btn-primary"
                                style="background-color:#84D9D0; border: solid 1px ; border-radius: 20px; padding:10px 40px 10px 40px;">
                                    <h5 style="margin: auto; font-weight: bolder;">会員登録</h5>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
