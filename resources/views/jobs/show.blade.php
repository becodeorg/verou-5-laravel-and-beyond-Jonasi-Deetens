@extends('components.layout')

@section('content')
<h1 class="content-title">Job Listing: {{ $job->title }}</h1>
<a href="{{ route('jobs.edit', ['job' => $job->id]) }}">Edit</a>
<form action="{{ route('jobs.destroy', ['job' => $job->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Job</button>
</form>
@endsection