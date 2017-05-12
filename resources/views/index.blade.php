@extends('layout')


@section('title')
Book Index
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <th>{{ $book->id }}</th>
                    <th>{{ $book->title }}</th>
                    <th>
                        <a href="{{ route('book.edit', ['id' => $book->id])}}" class="btn btn-success">Atualizar</a>
                        <form action="{{ route('book.delete', ['id' => $book->id])}}" method="post">
                            {{ method_field('DELETE')}}
                            {{ csrf_field() }}
                            <button class="btn btn-danger">Excluir</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
