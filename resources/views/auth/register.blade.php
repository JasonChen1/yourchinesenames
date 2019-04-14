@extends('layouts.master')

@section('content')
<div class="section">
    <div class="container">
        <h1>Register:</h1>

        <form class="box" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="field">
                <label for="name" >Name</label>
                <div class="control">
                    <input class="input" type="name" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

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
                <label for="password-confirm" >Confirm Password</label>
                <div class="control">
                    <input class="input" type="password" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <div class="control">
                        <button class="button is-link">Register</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
