@extends('components.layout')

@section('content')
<h1 class="content-title">{{ $job->title }}</h1>
<article class="note">
    <p>{{ $job->description }}</p>
    <p>- uploaded by {{ $job->user_id }}</p>
    <div class="flex buttons">
    <a href="{{ route('jobs.edit', ['job' => $job->id]) }}">Edit</a>
    <form action="{{ route('jobs.destroy', ['job' => $job->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="link-button" type="submit">Remove</button>
    </form>
    </div>
</article>

@endsection