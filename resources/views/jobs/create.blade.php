@extends('components.layout')

@section('content')
<h1 class="content-title">Create your job listing:</h1>
<section class="note">
    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required><br>
        @if($errors->has('title'))
            <div>
                {{ $errors->first('title') }}
            </div>
        @endif
        <label for="description">Description:</label><br>
        <input type="text" name="description" id="description" required><br>
        @if($errors->has('description'))
            <div>
                {{ $errors->first('description') }}
            </div>
        @endif
        <input type="submit" value="Create">
    </form>
</section>
@endsection