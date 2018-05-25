@extends('tabler::layouts.auth')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-login mx-auto">
      <div class="text-center mb-6">
        <img src="{{ asset('images/brand/tabler.svg') }}" class="h-6" alt="">
      </div>
      <form class="card" action="{{ route('password.email') }}" method="POST">
        {{ csrf_field() }}
        <div class="card-body p-6">
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          <div class="card-title">{{ __('Reset Password') }}</div>
          <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
          <div class="form-group">
            <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
          </div>
        </div>
      </form>
      <div class="text-center text-muted">
        Forget it, <a href="{{ route('login') }}">send me back</a> to the sign in screen.
      </div>
    </div>
  </div>
</div>
@endsection
