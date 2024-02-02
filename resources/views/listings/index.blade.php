@extends('components.layout')

@section('content')
<h1 class="content-title">My Board</h1>
@if(count($jobs) == 0)
    <section class="note">
        <h2>You have not enlisted for a job yet.</h2>
        <p>You can enlist for one by going to the job listings page.</p>
        <a href="{{ route('jobs.index') }}">Go</a>
    </section>
@else
    <div class="container">
        @foreach ($jobs as $job)
            <article class="note listing">
                <h2>{{ $job->title }}</h2>
                <a href="{{ route('jobs.show', ['job' => $job->id]) }}">Read</a>
            </article>
        @endforeach
    </div>
@endif
@endsection