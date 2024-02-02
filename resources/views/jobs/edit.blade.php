@extends('components.layout')

@section('content')
<section class="note">
    <form action="{{ route('jobs.update', ['job' => $job->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <h2>Update the job listing:</h2>
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" value="{{ $job->title }}" required><br>
        @if($errors->has('title'))
            <div>
                {{ $errors->first('title') }}
            </div>
        @endif
        <label for="description">Description:</label><br>
        <input type="text" name="description" id="description" value="{{ $job->description }}" required><br>
        @if($errors->has('description'))
            <div>
                {{ $errors->first('description') }}
            </div>
        @endif
        <input type="submit" value="Update">
    </form>
</section>

@endsection