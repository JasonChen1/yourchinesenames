@extends('layouts.master')

@section('content')
<div class="section">
    <div class="container">

        <h1>Admin Login:</h1>

        <form class="box" method="POST" action="/login">
            @csrf
            <div class="field">
                <label for="email" >E-Mail Address</label>
                <div class="control">
                    <input class="input" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="field">
                <label for="password" >password</label>
                <div class="control">
                    <input class="input" type="password" name="password" value="{{ old('password') }}" required>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember Me
                    </label>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <div class="control">
                        <button class="button is-link">Login</button>
                    </div>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                    @endif
                </div>
            </div>

        </form>

    </div>
</div>
@endsection
