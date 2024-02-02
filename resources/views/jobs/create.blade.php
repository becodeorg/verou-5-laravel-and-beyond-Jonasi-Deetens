@extends('components.layout')

@section('content')
<form action="{{ route('jobs.store') }}" method="POST">
    @csrf
    <h2>Create a new job listing:</h2>
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}" required>
    @if($errors->has('title'))
        <div>
            {{ $errors->first('title') }}
        </div>
    @endif
    <label for="description">Description:</label>
    <input type="text" name="description" id="description" required>
    @if($errors->has('description'))
        <div>
            {{ $errors->first('description') }}
        </div>
    @endif
    <input type="submit" value="Create">
</form>
@endsection