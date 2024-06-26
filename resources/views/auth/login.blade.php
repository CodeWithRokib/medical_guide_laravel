@extends('layouts.app')
@push('css')
<style>
    .btn-facebook {
    color: #fff;
    background-color: #3b5998;
    border-color: rgba(0,0,0,0.2);
}

.btn-social {
    position: relative;
    padding-left: 44px;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.btn-social:hover {
    color: #eee;
}

.btn-social :first-child {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 40px;
    padding: 7px;
    font-size: 1.6em;
    text-align: center;
    border-right: 1px solid rgba(0,0,0,0.2);
}
</style>
@endpush
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <input type="hidden" value="1001" name="pin">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>


                    </form>
                    <div class="d-flex justify-content-center mt-5">
                        <a class="btn btn-outline-dark" href="{{ route('social-login', 'google') }}" role="button" style="text-transform:none">
                            <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="data:image/png;base64,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" />
                            Login with Google
                          </a>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection
