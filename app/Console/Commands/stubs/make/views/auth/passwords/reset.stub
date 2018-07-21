@extends('tabler::layouts.auth')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-login mx-auto">
      <div class="text-center mb-6">
        <img src="./assets/brand/tabler.svg" class="h-6" alt="">
      </div>
      <form class="card" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="card-body p-6">
          <div class="card-title">{{ __('Reset Password') }}</div>
          <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
          <div class="form-group">
            <label class="form-label">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}" aria-describedby="passwordHelp" placeholder="Enter password" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" aria-describedby="passwordHelp" placeholder="Enter password" name="password_confirmation" required>
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Reset Password') }}</button>
          </div>
        </div>
      </form>
      <div class="text-center text-muted">
        Forget it, <a href="./login.html">send me back</a> to the sign in screen.
      </div>
    </div>
  </div>
</div>
@endsection
