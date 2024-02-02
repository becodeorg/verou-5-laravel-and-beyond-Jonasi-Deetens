@extends('components.layout')

@section('content')
<div class="container flex">
    <form class="note" action="{{ route('login') }}" method="POST">
        @csrf
        <h2>Please Log in:</h2>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" value="{{ old('username') }}" required><br>
        @if($errors->has('username'))
            <div>
                {{ $errors->first('username') }}
            </div>
        @endif
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br>
        @if($errors->has('password'))
            <div>
                {{ $errors->first('password') }}
            </div>
        @endif
        <input type="submit" value="Login">
    </form>

    <form class="note" action="{{ route('register') }}" method="POST">
        @csrf
        <h2>Or register for a free account:</h2>
        <label for="registerUsername">Username:</label><br>
        <input type="text" name="registerUsername" id="registerUsername" value="{{ old('registerUsername') }}" required><br>
        @if($errors->has('registerUsername'))
            <div>
                {{ $errors->first('registerUsername') }}
            </div>
        @endif
        <label for="email">E-mail:</label><br>
        <input type="text" name="email" id="email" value="{{ old('email') }}" required><br>
        @if($errors->has('email'))
            <div>
                {{ $errors->first('email') }}
            </div>
        @endif
        <label for="registerPassword">Password:</label><br>
        <input type="password" name="registerPassword" id="registerPassword" required> <br>        
        @if($errors->has('registerPassword'))
            <div>
                {{ $errors->first('registerPassword') }}
            </div>
        @endif
        <label for="registerPassword_confirmation">Confirm password:</label><br>
        <input type="password" name="registerPassword_confirmation" id="registerPassword_confirmation" required><br>      
        @if($errors->has('registerPassword_confirmation'))
            <div>
                {{ $errors->first('registerPassword_confirmation') }}
            </div>
        @endif
        <input type="submit" value="Register">
    </form>
</div>
@endsection