@extends('auth.blank')

@section('content')
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}

        <div class="row">
            <label for="name">Username</label>
            <input type="text" name="username" value="{{ old('name') }}" id="name">
        </div>

        <div class="row">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" id="email" class="validate">
        </div>

        <div class="row">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="row">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <div class="row">
            <button type="submit" class="btn waves-effect waves-light col s6 offset-s3">Register</button>
        </div>
    </form>
@stop