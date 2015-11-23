@extends('auth.blank')

@section('content')
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div class="row">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="validate" id="email">
        </div>

        <div class="row">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="row">
            <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember Me</label>
        </div>

        <div class="row center">
            <button type="submit" class="btn waves-effect waves-light col s6 offset-s3">Login</button>
        </div>
    </form>
@stop