<header class="header">
    <h1>Welcome to the Job Board!</h1>
    @if(auth()->check())
    <nav class="header-nav">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('jobs.index') }}">Job Listings</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </nav>
    @endif
</header>