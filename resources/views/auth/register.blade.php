@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #84D9D0;">
                    <h5 style="margin: auto; text-align:center; color:#fff; font-weight:bold">保護猫と飼い主をつなぐ</h5>
                </div>
                <div class="logo-image" style="width: 15%; margin:5px auto">
                    <img src="images/register_logo.png" alt="" style="width: 100%;">
                </div>
                <h3 style="text-align: center; margin-top:10px; margin-bottom:0px; font-weight:bold;">会員登録</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="img_url" class="col-md-4 col-form-label text-md-right">画像</label>
                            <input type="file" name="image" accept="image/jpeg,image/png" 
                                class="col-md-5 col-form-label text-md-end" value="null">
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" style="border-radius: 10px;" required autocomplete="name" autofocus placeholder="ニックネーム">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

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

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" 
                                name="password_confirmation" style="border-radius: 10px;" required autocomplete="new-password" placeholder="パスワード確認">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="admin-confirmation" class="col-md-4 col-form-label text-md-right">保護猫団体の方はこちら</label>

                            <div class="col-md-6">
                                <input type="radio"style="margin-top: 15px;" id="admin-comfirmation" name="admin_confirmation" value="admin_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" 
                                style="background-color:#84D9D0; border: solid 1px darkgray; border-radius: 20px; padding:10px 40px 10px 40px;">
                                    <h5 style="margin: auto;">会員登録</h5>
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
