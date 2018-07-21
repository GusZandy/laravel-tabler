@extends('tabler::layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-login mx-auto">
          <div class="text-center mb-6">
            <img src="{{ asset('images/brand/tabler.svg') }}" class="h-6" alt="">
          </div>
          <form class="card" action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}
            <div class="card-body p-6">
              <div class="card-title">{{ __('Login') }}</div>
              <div class="form-group">
                <label class="form-label">{{ __('E-Mail Address') }}</label>
                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label class="form-label">
                  {{ __('Password') }}
                  <a href="{{ route('password.request') }}" class="float-right small">{{ __('Forgot Your Password?') }}</a>
                </label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                  <span class="custom-control-label">{{ __('Remember Me') }}</span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
              </div>
            </div>
          </form>
          <div class="text-center text-muted">
            Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
          </div>
        </div>
    </div>
</div>
@endsection
