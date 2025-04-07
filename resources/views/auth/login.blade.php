@extends('Client.Template')

@section('Content')



  <!-- Sign Up Area Start -->
  <div class="signup-wrapper  space">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 ">
          <form method="POST" action="{{ route('login') }}" class="signup-form bg-smoke">
            @csrf
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin-bottom: 0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <h2 class="form-title text-center mb-lg-35">Log In</h2>
            <div class="form-group">
              <label for="loginUserId" class="sr-only">Username or email address*</label>
              <input id="email" placeholder="Email*"  @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  class="form-control"
                name="loginUserId" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong style="color: red">{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
              <label for="loginUserPass" class="sr-only">Password*</label>
              <input id="password" type="password" class="form-control" @error('password') is-invalid @enderror name="password" required autocomplete="current-password" placeholder="Password*"
                required>
                @error('password')
                <span style="color: red" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
              <input
              class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
              type="checkbox" >
              <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
            </div>
            <div class="form-group mb-0 text-center">
              <button type="submit" class="vs-btn mask-style1 w-100 style4">
                {{ __('Login') }}
            </button>
              <div class="bottom-links link-inherit d-md-flex justify-content-between mt-3">
                @if (Route::has('password.request'))
                <a class="recovery-link mb-2 mb-md-0" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
                <a href="/register">Or Create Account</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Sign Up Area End -->

 
@endsection
