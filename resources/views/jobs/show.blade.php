@extends('components.layout')

@section('content')
<main>
    <h1>Job Listing: {{ $job->title }}</h1>
    <a href="{{ route('jobs.edit', ['job' => $job->id]) }}">Edit</a>
    <form action="{{ route('jobs.destroy', ['job' => $job->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Job</button>
</form>
</main>
@endsection