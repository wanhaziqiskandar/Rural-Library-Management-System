@extends('layouts.app')

@section('content')
    <div class="mx-5">
        <a href="{{ route('book.create') }}" class="btn btn-dark">Add book</a>

        <h2 class="mt-3 font-weight-bold">Borrowed Books</h2>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Available</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($borrowedBooks as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->category }}</td>
                            <td><a href="{{ route('book.show', $book) }}" class="btn btn-dark">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <h2 class="mt-3 font-weight-bold">Available Books</h2>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Available</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($availableBooks as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->category }}</td>
                            <td><a href="{{ route('book.show', $book) }}" class="btn btn-dark">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection