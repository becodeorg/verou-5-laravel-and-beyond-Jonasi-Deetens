<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board - Login</title>
</head>
<body>
    <main>
        <a href="{{ route('jobs.index') }}">JOBS</a>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h2>Please Log in:</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required>
            @if($errors->has('username'))
                <div>
                    {{ $errors->first('username') }}
                </div>
            @endif
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" required>
            @if($errors->has('password'))
                <div>
                    {{ $errors->first('password') }}
                </div>
            @endif
            <input type="submit" value="Login">
        </form>
        
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h2>Or register for a free account:</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            @if($errors->has('username'))
                <div>
                    {{ $errors->first('username') }}
                </div>
            @endif
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" required>
            @if($errors->has('email'))
                <div>
                    {{ $errors->first('email') }}
                </div>
            @endif
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" required>         
            @if($errors->has('password'))
                <div>
                    {{ $errors->first('password') }}
                </div>
            @endif
            <input type="submit" value="Register">
        </form>
    </main>
    @include('components.footer')
</body>
</html>