@extends('layouts.app')

@section('content')
<div class="container" style="width: 900px; height:900px" >
    <div class="row justify-content-center" style="height: 800px;">
        <div class="col-md-8" >
            <div class="card" style=" height: 600px;
                                    background-color: white;
                                    border-bottom-left-radius: 20px 20px;
                                    border-bottom-right-radius: 20px 20px;
                                    border-top-left-radius: 20px 20px;
                                    border-top-right-radius: 20px 20px;
                                    margin-top: 40px;">
                <div class="card-header" style="height:45px; background-color: #84D9D0; margin-top:30px; margin-bottom:10px">
                <h5 style="font-size:24px; margin: auto; text-align:center; color:#fff; font-weight:bold">保護猫と飼い主をつなぐ</h5>
                </div>
                <div class="login-image" style="width: 15%; margin:5px auto">
                    <img src="/images/register_logo.png" alt="" width="100%">
                </div>

                <h3 style="text-align: center; margin-top:10px; margin-bottom:0px; font-weight:bold;">ログイン</h3>
                <div class="card-body" style="margin-bottom: 5%">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style="margin-bottom: 10px;">
                            <label for="email" ></label>
                            {{-- class="col-md-4 col-form-label text-md-right" --}}

                            <div class="col-md-6" style="margin-bottom: 8px; margin: 0 auto; border-radius:10px;">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="メールアドレス">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" ></label>
                            {{-- class="col-md-4 col-form-label text-md-right" --}}

                            <div class="col-md-6" style="margin-top: 8px; margin: 0 auto">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="パスワード">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row" style="margin-top: 8px">
                            <div class="col-md-6 offset-md-4" style="width: 60%">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style="margin-top: 12px">
                                <button type="submit" class="btn btn-primary"
                                    style="background-color:#84D9D0; border: solid 1px ; border-radius: 20px; padding:10px 40px 10px 40px;">
                                    <h5 style="margin: auto; font-weight: bolder;">ログイン</h5>
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        パスワードをお忘れの方はこちら
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection


