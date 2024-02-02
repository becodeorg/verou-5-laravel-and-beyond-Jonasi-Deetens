@extends('components.layout')

@section('content')
<h1 class="content-title">Job Listings</h1>
@if(count($jobs) == 0)
    <section class="note">
        <h2>There are no current job listings available.</h2>
        <p>Please create a new job listing.</p>
<a href="{{ route('jobs.create') }}">Add a new listing</a>
    </section>
@else
    <div class="container">
        @foreach ($jobs as $job)
            <article class="note listing">
                <h2>{{ $job->title }}</h2>
                <a href="{{ route('jobs.show', ['job' => $job->id]) }}">Read</a>
            </article>
        @endforeach
        <article class="note listing">
            <a href="{{ route('jobs.create') }}">+</a>
        </article>
    </div>
@endif
@endsection