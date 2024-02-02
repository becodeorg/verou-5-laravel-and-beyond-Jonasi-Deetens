@extends('components.layout')

@section('content')
<form action="{{ route('jobs.update', ['job' => $job->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <h2>Update the job listing:</h2>
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $job->title }}" >
    @if($errors->has('title'))
        <div>
            {{ $errors->first('title') }}
        </div>
    @endif
    <label for="description">Description:</label>
    <input type="text" name="description" id="description" value="{{ $job->description }}" required>
    @if($errors->has('description'))
        <div>
            {{ $errors->first('description') }}
        </div>
    @endif
    <input type="submit" value="Update">
</form>
@endsection