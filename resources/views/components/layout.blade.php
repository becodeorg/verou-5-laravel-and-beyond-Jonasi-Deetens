<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board</title>
    <link rel="stylesheet" href=" {{ asset('css/index.css') }} ">
</head>
<body>
    @include('components.header')
    <main class="content">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>