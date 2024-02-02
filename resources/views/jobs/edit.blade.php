@extends('components.layout')

@section('content')
<h1 class="content-title">Update the job listing:</h1>
<section class="note">
    <form action="{{ route('jobs.update', ['job' => $job->id]) }}" method="POST">
        @csrf
        @method('PUT')
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