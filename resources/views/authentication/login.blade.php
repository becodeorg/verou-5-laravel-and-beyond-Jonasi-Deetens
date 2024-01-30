<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board - Login</title>
</head>
<body>
    <main>
        <form action="{{ route('login') }}">
            <h2>Please Log in:</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" required>
        </form>
        
        <form action="{{ route('register') }}">
            <h2>Or register for a free account:</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" required>
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" required>
        </form>
    </main>
    @include('components.footer')
</body>
</html>