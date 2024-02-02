<header class="header flex">
    <h1>Job Board!</h1>
    @if(auth()->check())
    <nav class="header-nav">
        <ul class="header-ul flex">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('jobs.index') }}">Job Listings</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </nav>
    @endif
</header>