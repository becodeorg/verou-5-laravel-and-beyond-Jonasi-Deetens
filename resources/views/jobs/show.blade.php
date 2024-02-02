@extends('components.layout')

@section('content')
<h1 class="content-title">{{ $job->title }}</h1>
<article class="note">
    <p>{{ $job->description }}</p>
    <p>- uploaded by {{ $job->user_id }}</p>
    @if(auth()->id() == $job->user_id)
    <div class="flex buttons">
        <a class="edit" href="{{ route('jobs.edit', ['job' => $job->id]) }}">Edit</a>
        <form action="{{ route('jobs.destroy', ['job' => $job->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="link-button" type="submit">Remove</button>
        </form>
    </div>
    @else
    <div class="flex buttons">
        <form action="{{ route('jobs.enlist', ['job' => $job->id]) }}" method="POST">
            @csrf
            <button class="link-button" type="submit">Enlist</button>
            @if($errors->has("error"))
                <p>{{ $errors->first("error") }}</p>
            @endif
        </form>    
    </div>
    @endif
</article>

@endsection