@extends('layouts.master')

@section('content')
<div class="section">
    <div class="container">
        <h1>Reset Password:</h1>

        <form class="box" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="field">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
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

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <div class="control">
                        <button class="button is-link">Send Password Reset Link</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
