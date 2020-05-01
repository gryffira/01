@extends('layouts.app')
@section('title', ' | Login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="margin: 50px auto 20px; border-radius: 0px; background: rgba(255,255,255, 0.9)">
                <div class="card-header" style=" background-color: #fff; font-weight: bold; font-family: Oswald, sans-serif"><a href="{{ route('landpage') }}" style="color: black;">MADINATUL QU'RAN</a></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" action="{{ route('landpage') }}">
                                    {{ __('Login') }}
                                </button>
                                
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Lupa Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
             <!--            <div class="form-group row mb-0 mt-2">
                            <div class="col-md-8 offset-md-4">
                             <label>Belum punya Akun?</label>

                             <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
