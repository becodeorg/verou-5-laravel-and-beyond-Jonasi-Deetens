@extends('components.layout')

@section('content')

<main>
    <h1>Welcome home!</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input type="submit" value="Logout">
    </form>
</main>

@endsection