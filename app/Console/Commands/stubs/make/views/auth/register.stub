@extends('tabler::layouts.auth')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-login mx-auto">
      <div class="text-center mb-6">
        <img src="./assets/brand/tabler.svg" class="h-6" alt="">
      </div>
      <form class="card" action="{{ route('register') }}" method="POST">
        {{ csrf_field() }}
        <div class="card-body p-6">
          <div class="card-title">{{ __('Register') }}</div>
          <div class="form-group">
            <label class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter name" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label class="form-label">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter email" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label class="form-label">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="password_confirmation" required>
          </div>
          {{-- <div class="form-group">
            <label class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" />
              <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
            </label>
          </div> --}}
          <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
          </div>
        </div>
      </form>
      <div class="text-center text-muted">
        Already have account? <a href="{{ route('login') }}">Sign in</a>
      </div>
    </div>
  </div>
</div>
@endsection
