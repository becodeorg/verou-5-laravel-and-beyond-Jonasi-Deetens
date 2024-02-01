@extends('components.layout')

@section('content')
<main>
    <h1>Job Listings</h1>
    @if(count($jobs) == 0)
        <h2>There are no current job listings available.</h2>
        <p>Please create a new job listing.</p>
    @else
        <nav>
            <ul>
            @foreach ($jobs as $job)
                <li>
                    <p>{{ $job->title }} - {{ $job->description }}</p>
                    <a href="{{ route('jobs.show', ['job' => $job->id]) }}">Check listing</a>
                </li>
            @endforeach
            </ul>
        </nav>
    @endif
    <a href="{{ route('jobs.create') }}">Add a new listing</a>
</main>
@endsection