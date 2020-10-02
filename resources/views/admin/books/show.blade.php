@extends('layouts.layout')

@section('content')
    <h1 class="mt-5">Books</h1>

    <nav class="nav">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.index') }}">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('books.create') }}">Create</a>
            </li>
            <a class="nav-link active" href="{{ route('books.show', ['book' => $book->id]) }}">Book Details</a>
        </ul>
    </nav>
@endsection
